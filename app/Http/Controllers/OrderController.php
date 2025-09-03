<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Midtrans\Snap;
use Midtrans\Config;

class OrderController extends Controller
{


    public function pembayaran()
    {
        $bookedSlots = Order::select('tanggal_booking as tanggal', 'jam_booking as jam', 'qty')
            ->where('status', '!=', 'Canceled')
            ->get();

        return view('bayarbooking.pembayaran', compact('bookedSlots'));
    }

    public function checkout(Request $request)
    {
        $existingBookings = Order::where('tanggal_booking', $request->tanggal_booking)
            ->where('status', '!=', 'Canceled')
            ->get();

        $requestedStart = Carbon::parse($request->jam_booking);
        $requestedEnd = $requestedStart->copy()->addHours((int) $request->qty);

        foreach ($existingBookings as $booking) {
            $existingStart = Carbon::parse($booking->jam_booking);
            $existingEnd = $existingStart->copy()->addHours((int) $booking->qty);

            if (
                $requestedStart->lt($existingEnd) && $requestedEnd->gt($existingStart)
            ) {
                return back()->with('error', 'Jadwal bentrok dengan booking lain. Silakan pilih jam atau durasi lain.');
            }
        }

        $userId = Auth::id();
        $user = Auth::user();

        $order = Order::create([
            'name' => $user->name,
            'phone' => $user->phone,
            'tanggal_booking' => $request->tanggal_booking,
            'jam_booking' => $request->jam_booking,
            'qty' => (int) $request->qty,
            'address' => $request->address,
            'total_price' => (int) $request->qty * 10000,
            'status' => 'Unpaid',
        ]);

        $order_id_midtrans = 'PS-' . $order->id . '-' . time();

        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => $order_id_midtrans,
                'gross_amount' => $order->total_price,
            ],
            'customer_details' => [
                'name' => $user->name,
                'phone' => $user->phone,
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        $order->midtrans_order_id = $order_id_midtrans;
        $order->save();

        return view('bayarbooking.checkout', compact('snapToken', 'order'))->with('success', 'Booking berhasil! Silakan lanjutkan pembayaran.');
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashed == $request->signature_key) {
            $order = Order::where('midtrans_order_id', $request->order_id)->first();

            if ($order && in_array($request->transaction_status, ['capture', 'settlement'])) {
                $order->update(['status' => 'Paid']);
            }
        }
    }

    public function invoice($id)
    {
        $order = Order::find($id);
        return view('bayarbooking.invoice', compact('order'));
    }

    public function markAsPaid($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'Paid';
        $order->save();

        return redirect()->back()->with('success', 'Status berhasil diperbarui menjadi Paid');
    }

    public function booking($id)
    {
        $order = Order::findOrFail($id);
        return view('bayarbooking.invoice', compact('order'));
    }





}