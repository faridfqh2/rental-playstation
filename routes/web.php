<?php

use App\Http\Controllers\KirimEmail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KirimEmailController;


Route::get('/about', function () {
    return view('about');
});

Route::get('blog',[BlogController::class,'index'])->name('blog');

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/orders/manage', [OrderController::class, 'manage'])->name('orders.manage');

// Route::get('/', [OrderController::class, 'index']);
Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::get('/invoice/{id}', [OrderController::class, 'invoice']);


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'auth'])->name('login.proses');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_proses'])->name('register.proses');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Untuk admin, hanya bisa diakses kalau sudah login
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/', function () {
    return view('home');
});
});

// Home route untuk user biasa

Route::get('/schedule', [ScheduleController::class, 'index']);
Route::get('/jadwal-booking', [ScheduleController::class, 'index']);

Route::get('/booking/create', [OrderController::class, 'create'])->name('booking.create');
Route::post('/booking/store', [OrderController::class, 'store'])->name('booking.store');

Route::patch('/orders/{id}/mark-paid', [OrderController::class, 'markAsPaid'])->name('orders.markPaid');

Route::get('/tampilan', function () {
    return view('tampilan');
})->name('games.index');
Route::get('/games', [GamesController::class, 'index'])->name('games.index');
Route::get('/tampilan', [GamesController::class, 'index'])->name('games.tampilan');

Route::get('/games', [GamesController::class, 'index'])->name('games.index');
Route::get('/admin/games/create', [GamesController::class, 'create'])->name('games.create');
Route::post('/admin/games', [GamesController::class, 'store'])->name('games.store');
Route::get('/admin/games', [GamesController::class, 'index'])->name('games.index');
Route::get('/tampilan', [GamesController::class, 'tampilkanTampilan'])->name('tampilan');

Route::get('/blog/admin', [BlogController::class, 'blogAdmin'])->name('blog.admin');
Route::get('/admin/blogs/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/admin/blogs/store', [BlogController::class, 'store'])->name('blog.store');

Route::get('/kontak', [kirimEmailController::class, 'index'])->name('kontak');
Route::post('/kontak', [kirimEmailController::class, 'store'])->name('contact.store');   


