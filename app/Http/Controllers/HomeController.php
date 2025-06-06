<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        // Ambil data appointments dengan relasi client dan employee
        $appointments = Appointment::with(['client', 'employee'])->get();

        // Format events untuk FullCalendar
        $events = [];
        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => $appointment->client->name . ' (' . $appointment->employee->name . ')',
                'start' => $appointment->start_time,
                'end' => $appointment->finish_time,
            ];
        }

        return view('schedule', compact('events'));
    }
    // File: app/Http/Controllers/HomeController.php


public function index()
{
    $games = Game::paginate(9); // atau Game::all() jika tidak ingin pagination
    return view('games', compact('games'));
}

}
