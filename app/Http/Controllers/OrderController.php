<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Order;
use Midtrans\checkout;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

   class OrderController extends Controller
{
    public function index(){
        return view('home');
    }
   public function checkout(Request $request)
{
    $now = Carbon::now();
    $user = Auth::id();
    $phone = auth()->user()->phone;

    $request->request->add([
        'total_price' => $request->qty * 10000,
        'status' => 'Unpaid',
       'tanggal_booking' => $request->tanggal_booking,
        'jam_booking' => $request->jam_booking,
    ]);

    $order = Order::create([
        'name' => $user,
        'phone' => $phone,
        'tanggal_booking' => $request->tanggal_booking,
        'jam_booking' => $request->jam_booking,
        'qty' => $request->qty,
        'address' => $request->address,
        'total_price' => $request->qty * 10000,
    ]);

    // Buat order_id unik untuk Midtrans (string)
    $order_id_midtrans = 'PS-' . $order->id . '-' . time();

    \Midtrans\Config::$serverKey = config('midtrans.server_key');
    \Midtrans\Config::$isProduction = config('midtrans.is_production');
    \Midtrans\Config::$isSanitized = true;
    \Midtrans\Config::$is3ds = true;

    $params = [
        'transaction_details' => [
            'order_id' => $order_id_midtrans,
            'gross_amount' => $order->total_price,
        ],
        'customer_details' => [
            'name' => $request->name,
            'phone' => $request->phone,
            'tanggal_booking' => $request->tanggal_booking,
            'jam_booking' => $request->jam_booking,
        ],
    ];

    $snapToken = \Midtrans\Snap::getSnapToken($params);

    // Simpan order_id Midtrans ke database agar nanti bisa cek callback
    $order->midtrans_order_id = $order_id_midtrans;
    $order->save();

    return view('checkout', compact('snapToken', 'order'));
}
   public function callback(Request $request)
{
    $serverKey = config('midtrans.server_key');
    $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

    if ($hashed == $request->signature_key) {
        $order = Order::where('midtrans_order_id', $request->order_id)->first();

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        if (in_array($request->transaction_status, ['capture', 'settlement'])) {
            $order->update(['status' => 'Paid']);
        }
    }
}
    public function getFormattedPriceAttribute()
    {
        return 'Rp ' . number_format($this->total_price, 0, ',', '.');
    }

    public function invoice($id){
        $order = Order::find($id);
        return view('invoice', compact('order'));
        return view('checkout', compact('snapToken', 'order'));

    }
    public function markAsPaid($id)
{
    $order = Order::findOrFail($id);
    $order->status = 'Paid';
    $order->save();

    return redirect()->back()->with('success', 'Status berhasil diperbarui menjadi Paid');
}
public function booking($id){
    $order = Order::findOrFail($id);
    return view('invoice', compact('order'));
}

}
