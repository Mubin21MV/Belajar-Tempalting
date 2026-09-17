<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sinilah Anda mendaftarkan rute (URL) untuk aplikasi web Anda.
|
*/

// Rute untuk Halaman Beranda
Route::get('/', function () {
    return view('home');
});

// Rute untuk Halaman Katalog (sementara kita arahkan ke tampilan home juga)
Route::get('/katalog', function () {
    return view('home');
});

// Rute untuk Halaman Pembayaran / Checkout
Route::get('/pembayaran', function () {
    return view('pembayaran');
});