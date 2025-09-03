<?php

use App\Http\Controllers\KirimEmail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\KirimEmailController;
use App\Http\Controllers\Admin\AdminTransactionController;


Route::get('/orders/manage', [OrderController::class, 'manage'])->name('orders.manage');

// Route::get('/', [OrderController::class, 'index']);
Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::get('/invoice/{id}', [OrderController::class, 'invoice']);


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'auth'])->name('login.proses');

// Forgot password
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_proses'])->name('register.proses');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Untuk admin, hanya bisa diakses kalau sudah login
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/', function () {
    return view('home');


});
Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/schedule', [ScheduleController::class, 'index']);
Route::get('/jadwal-booking', [ScheduleController::class, 'index']);

Route::get('/booking/create', [OrderController::class, 'create'])->name('booking.create');
Route::post('/booking/store', [OrderController::class, 'store'])->name('booking.store');

Route::patch('/orders/{id}/mark-paid', [OrderController::class, 'markAsPaid'])->name('orders.markPaid');

Route::get('/paket', [KontenController::class, 'index'])->name('paket');
Route::get('/informasi', [KontenController::class, 'informasi'])->name('informasi');

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
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blog/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

Route::get('/kontak', [kirimEmailController::class, 'index'])->name('kontak');
Route::post('/kontak', [kirimEmailController::class, 'store'])->name('kontak.store');   


Route::get('/sewa', [RentalController::class, 'index'])->name('sewa.index');
Route::post('/sewa', [RentalController::class, 'store'])->name('sewa.store');
Route::get('/checkout/{id}', [RentalController::class, 'checkout'])->name('sewa.checkout');
Route::get('/invoicesewa/{id}', [RentalController::class, 'invoicesewa'])->name('sewa.invoice');

Route::get('/about', function () {
    return view('about');
});
Route::get('blog',[BlogController::class,'index'])->name('blog');


Route::get('/pembayaran', [OrderController::class, 'pembayaran'])->name('pembayaran');

Route::get('admin/orderlist', [AdminController::class, 'orderList'])->name('orders.index');


Route::get('/orders/{id}/edit', [AdminController::class, 'edit'])->name('orders.edit');
Route::put('/orders/{id}', [AdminController::class, 'update'])->name('orders.update');
Route::delete('/orders/{id}', [AdminController::class, 'destroy'])->name('orders.destroy');

Route::get('admin.charts', [AdminController::class, 'charts'])->name('admin.charts');

Route::get('/admin/sewa', [AdminController::class, 'sewaadminindex'])->name('admin.sewa');
Route::get('/admin/sewa/{id}/edit', [AdminController::class, 'edit'])->name('sewa.edit');
Route::put('/admin/sewa/{id}', [AdminController::class, 'update'])->name('sewa.update');
Route::delete('/admin/sewa/{id}', [AdminController::class, 'destroy'])->name('sewa.destroy');


});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/history', [RentalController::class, 'history'])->name('sewa.history');

});




