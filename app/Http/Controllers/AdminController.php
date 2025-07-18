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
        // Ambil data total pendapatan per hari untuk chart
        $chartData = Order::selectRaw('DATE(created_at) as date, SUM(total_price) as total')
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();
        $blogs = Blog::all();
        $labels = $chartData->pluck('date');
        $data = $chartData->pluck('total');

        // Ambil data order terbaru, paginasi 10 per halaman
        $order = Order::orderBy('id', 'desc')->paginate(10);

       return view('admin', compact('labels', 'data', 'order','blogs'));

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
    $order = Order::findOrFail($id);
    return view('admin.orders_edit', compact('order'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'qty' => 'required|integer|min:1',
        'address' => 'required|string',
        'total_price' => 'required|numeric|min:0',
        'status' => 'required|in:Paid,Unpaid',
    ]);

    $order = Order::findOrFail($id);
    $order->update([
        'name' => $request->name,
        'phone' => $request->phone,
        'qty' => $request->qty,
        'address' => $request->address,
        'total_price' => $request->total_price,
        'status' => $request->status,
    ]);
    return redirect()->route('orders.index')->with('success', 'Order berhasil diperbarui.');
}

public function destroy($id)
{
    $order = Order::findOrFail($id);
    $order->delete();

    return redirect()->route('orders.index')->with('success', 'Order berhasil dihapus.');
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
