<?php

use Illuminate\Support\Facades\Route;

// Halaman User
Route::get('/', function () {
    return view('pages.home');
});

// Halaman Admin
