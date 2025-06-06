<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
}
