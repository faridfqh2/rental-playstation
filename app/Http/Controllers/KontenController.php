<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontenController extends Controller
{
    public function index()
    {
        return view('konten.paket'); 
}
    public function informasi()
    {
        return view('konten.informasi'); 
    }
}
