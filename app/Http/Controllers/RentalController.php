<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use Carbon\Carbon;

class RentalController extends Controller
{
    public function index()
    {
        return view('sewa');
    }

public function store(Request $request)
{
    
    // Validasi input
    $validated = $request->validate([
        'jumlah_unit' => 'required|integer|min:1',
        'tanggal_mulai' => 'required|date',
        'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        'alamat' => 'required|string|max:255',
        'metode_pembayaran' => 'required|string',
        'total_harga' => 'required|integer|min:1',
    ]);

    // Simpan ke database
    $rental = Rental::create($validated);

    // Redirect ke halaman checkoutsewa.blade dengan data penyewaan
    return view('checkoutsewa', ['rental' => $rental]);
}

}
