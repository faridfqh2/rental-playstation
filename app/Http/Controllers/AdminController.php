<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Rental;
use Illuminate\Http\Request;
use App\Models\Order; // pastikan model Order sudah dibuat dan sesuai

class AdminController extends Controller
{
    public function dashboard()
    {
        // Ambil data total pendapatan per bulan untuk chart
        $chartData = Order::selectRaw("DATE_FORMAT(created_at, '%M %Y') as month, SUM(total_price) as total, COUNT(*) as count")
            ->groupBy('month')
            ->orderByRaw("MIN(created_at)")
            ->get();
        $blogs = Blog::all();
        $labels = $chartData->pluck('month');
        $data = $chartData->pluck('total');
        $orderCount = $chartData->pluck('count');

        // Ambil data order terbaru, paginasi 10 per halaman
        $order = Order::orderBy('id', 'desc')->paginate(10);

       return view('admin', compact('labels', 'data', 'order', 'blogs', 'orderCount'));

    }

    public function markPaid($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'Paid';
        $order->save();

        return redirect()->back()->with('success', 'Order marked as Paid.');
    }
    public function orderList()
{
    $order = Order::orderBy('id', 'desc')->get(); // tanpa paginate supaya semua tampil
    return view('admin.orderlist', compact('order'));
}
    public function sewaadminindex()
    {
        $rentals = Rental::orderBy('created_at', 'desc')->get();
        return view('admin.sewa', compact('rentals'));
    }

public function edit($id)
{
    $rental = Rental::findOrFail($id);
    return view('admin.sewa_edit', compact('rental')); // pastikan nama file view-nya benar
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email',
        'jumlah_unit' => 'required|integer|min:1',
        'tanggal_mulai' => 'required|date',
        'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        'alamat' => 'required|string',
    ]);

    $rental = Rental::findOrFail($id);
    $rental->update($request->all());

    return redirect()->route('admin.sewa')->with('success', 'Data penyewaan berhasil diperbarui.');
}

public function destroy($id)
{
    $rental = Rental::findOrFail($id);
    $rental->delete();

    return redirect()->route('admin.sewa')->with('success', 'Data penyewaan berhasil dihapus.');
}

public function charts()
{
    $chartData = \App\Models\Order::selectRaw('DATE(created_at) as date, SUM(total_price) as total')
        ->groupBy('date')
        ->orderBy('date')
        ->get();

    $labels = $chartData->pluck('date');   // ['2025-06-25', '2025-06-26']
    $data = $chartData->pluck('total');    // [100000, 200000]

    return view('admin.charts', compact('labels', 'data'));
}


// Menampilkan form edit untuk Order


// Memproses update data Order


 

}
