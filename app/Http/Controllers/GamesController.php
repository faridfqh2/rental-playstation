<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GamesController extends Controller
{
    public function index()
    {
               $games = Game::orderBy("created_at", "desc")->paginate(50); // Ambil data dengan pagination
        return view('games', compact('games')); // Pastikan $games dikirim ke view
    }
public function tampilkanTampilan()
{
    $games = Game::orderBy("created_at", "desc")->paginate(50);  // ambil data game
    return view('tampilan', compact('games')); // kirim $games ke view tampilan
}

    public function create()
    {
        return view('admin.games.create'); // Contoh, jika ada halaman create game
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('games', 'public');

        Game::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'category' => $validated['category'],
            'image' => $imagePath,
        ]);

        return redirect()->route('games.index')->with('success', 'Game berhasil ditambahkan!');
    }
}
