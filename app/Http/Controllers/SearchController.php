<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Blog;


class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');

        // Pencarian di Game
        $games = Game::where('title', 'like', "%{$query}%")
                    ->orWhere('description', 'like', "%{$query}%")
                    ->get();

        // Pencarian di Blog
        $blogs = Blog::where('title', 'like', "%{$query}%")
                    ->orWhere('content', 'like', "%{$query}%")
                    ->get();

    

        return view('search.results', compact('query', 'games', 'blogs'));
    }
}
