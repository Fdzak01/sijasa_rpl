<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;

// Halaman User
Route::get('/', function () {
    return view('pages.home');
});

// Halaman Admin

=======
use App\Http\Controllers\CartController;
use App\Http\Controllers\KategoriLayananController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PenggunaController::class, 'home'])->name('home');
Route::get('/layanan', [PelayananController::class, 'service'])->name('layanan');
Route::get('/layanan-detail/{id}', [PelayananController::class, 'detail'])->name('layanan.detail');
Route::post('/order', [CartController::class, 'store'])->name('order.cart');
Route::get('/payment', [CartController::class, 'index'])->name('payment');
Route::post('/payment', [CartController::class, 'order'])->name('payment.order');
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/login', [PenggunaController::class, 'login'])->name('login');
Route::post('/login', [PenggunaController::class, 'authenticate'])->name('authenticate');

Route::get('/register', [PenggunaController::class, 'create'])->name('register');
Route::post('/register', [PenggunaController::class, 'store'])->name('register.create');

Route::get('/logout', [PenggunaController::class, 'logout'])->name('logout');

Route::get('/dashboard', [PenggunaController::class, 'dashboard'])->name('dashboard');

// pengguna
Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna');
Route::get('/pengguna-edit/{id}', [PenggunaController::class, 'edit'])->name('pengguna.edit');
Route::put('/pengguna-update/{id}', [PenggunaController::class, 'update'])->name('pengguna.update');
Route::delete('/pengguna-delete/{id}', [PenggunaController::class, 'destroy'])->name('pengguna.destroy');

// Category Service
Route::get('/category-service', [KategoriLayananController::class, 'index'])->name('category-service');
Route::get('/create-category-service', [KategoriLayananController::class, 'create'])->name('category.create');
Route::post('/create-category-service', [KategoriLayananController::class, 'store'])->name('category.store');
Route::get('/update-category-service/{id}', [KategoriLayananController::class, 'edit'])->name('category.edit');
Route::put('/update-category-service/{id}', [KategoriLayananController::class, 'update'])->name('category.update');
Route::delete('/delete-category-service/{id}', [KategoriLayananController::class, 'destroy'])->name('category.destroy');


// Services
Route::get('/service', [PelayananController::class, 'index'])->name('service');
Route::get('/create-service', [PelayananController::class, 'create'])->name('service.create');
Route::post('/create-service', [PelayananController::class, 'store'])->name('service.store');
Route::get('/update-service/{id}', [PelayananController::class, 'edit'])->name('service.edit');
Route::put('/update-service/{id}', [PelayananController::class, 'update'])->name('service.update');
Route::delete('/delete-service/{id}', [PelayananController::class, 'destroy'])->name('service.destroy');
>>>>>>> 260d3f1 (Website SiJasa)
