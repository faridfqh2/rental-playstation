<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
           $blogs = Blog::all();
        return view('blog', compact('blogs'));
    }

public function blogAdmin()
{
    $blog = Blog::all();
    return view('update',compact('blog'));
}

public function create()
{
    return view('blogCreate');
}
public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);
        $validated['image'] = $imageName;
    }

    Blog::create($validated);

    return redirect()->route('blog.admin')->with('success', 'Blog berhasil ditambahkan!');
}




}
