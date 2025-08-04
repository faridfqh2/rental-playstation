<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Rental;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentalController extends Controller
{
    public function index()
    {
        return view('bayarsewa.sewa'); // form penyewaan
    }

    public function store(Request $request)
    {
        $request->validate([
            'jumlah_unit' => 'required|integer|min:1',
            'tanggal_mulai' => 'required|date|after_or_equal:today',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'total_harga' => 'required|integer|min:1',
        ]);

        // Simpan data ke database
        $rental = Rental::create(
            [
                'nama' => auth()->user()->name,
                'email' => auth()->user()->email,
                'jumlah_unit' => $request->jumlah_unit,
                'tanggal_mulai' => Carbon::parse($request->tanggal_mulai),
                'tanggal_selesai' => Carbon::parse($request->tanggal_selesai),
                'alamat' => auth()->user()->alamat,
                'total_harga' => $request->total_harga,
            ]
        );

        // Buat order ID unik untuk Midtrans
        $orderId = 'RENTAL-' . $rental->id . '-' . Str::random(5);

        // Simpan order ID ke database
        $rental->midtrans_order_id = $orderId;
        $rental->save();

        // Redirect ke halaman checkout (Snap token di-generate di sana)
        return redirect()->route('sewa.checkout', ['id' => $rental->id]);
    }
    public function invoicesewa($id)
    {
        $rental = Rental::findOrFail($id);
        $rental = Rental::with('user')->findOrFail($id);


        return view('bayarsewa.invoicesewa', compact('rental'));
    }

  public function checkout($id)
{
    $rental = Rental::findOrFail($id);

    Config::$serverKey = config('midtrans.server_key');
    Config::$isProduction = config('midtrans.is_production');
    Config::$isSanitized = true;
    Config::$is3ds = true;

    $snapToken = null;

    // Coba generate snap token, kalau error karena order_id duplikat, buat order_id baru dan update
    try {
        $params = [
            'transaction_details' => [
                'order_id' => $rental->midtrans_order_id,
                'gross_amount' => $rental->total_harga,
            ],
            'customer_details' => [
                'name' => $rental->nama,
                'email' => $rental->email,
                'phone' => $rental->user->phone ?? '081234567890',
            ],
        ];

        $snapToken = Snap::getSnapToken($params);
    } catch (Exception $e) {
        $response = json_decode($e->getMessage(), true);

        // Jika error karena order_id sudah dipakai
        if (isset($response['error_messages']) && in_array('transaction_details.order_id has already been taken', $response['error_messages'])) {
            // Buat order_id baru
            $newOrderId = 'RENTAL-' . $rental->id . '-' . time();
            $rental->midtrans_order_id = $newOrderId;
            $rental->save();

            // Coba ulang generate snap token dengan order_id baru
            $params['transaction_details']['order_id'] = $newOrderId;
            $snapToken = Snap::getSnapToken($params);
        } else {
            // Kalau error lain, lempar exception lagi supaya bisa diketahui
            throw $e;
        }
    }
    

    return view('bayarsewa.checkoutsewa', compact('rental', 'snapToken'));
}}
