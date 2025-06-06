<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class ScheduleController extends Controller
{
    public function index()
    {
    $bookings = Order::where('status', 'paid')
        ->select('tanggal_booking', 'jam_booking')
        ->get();

        return view('schedule', [
            'bookings' => $bookings
        ]);
    }
}

