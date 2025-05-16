<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/schedule', function () {
    return view('schedule');
});


Route::get('/', [OrderController::class, 'index']);
Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::get('/invoice/{id}', [OrderController::class, 'invoice']);


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'auth'])->name('login.proses');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_proses'])->name('register.proses');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::post('/checkout', [OrderController::class,'checkout'])->name('checkout');
// Route::post('/store', [OrderController::class,'store'])->name('store');

Route::get('/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');



