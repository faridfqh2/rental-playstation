<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game; // ganti sesuai model yang kamu cari

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');

        // Contoh pencarian pada tabel games
        $results = Game::where('title', 'like', "%{$query}%")
                        ->orWhere('description', 'like', "%{$query}%")
                        ->get();

        return view('search.results', compact('results', 'query'));
    }
}
