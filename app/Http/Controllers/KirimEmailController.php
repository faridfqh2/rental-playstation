<?php

namespace App\Http\Controllers;

use App\Mail\KirimEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class kirimEmailController extends Controller
{
    public function index(){
        return view('kontak');
    }
   public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Ambil semua data dari form
        $data_email = [
            'subject' => $request->subject,
            'sender_name' => $request->name,
            'sender_email' => $request->email,
            'phone' => $request->phone,
            'isi' => $request->message,
        ];


        // Kirim ke email admin
        Mail::to("irsan.jaya.1gb@gmail.com")->send(new KirimEmail($data_email));

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
    
}
