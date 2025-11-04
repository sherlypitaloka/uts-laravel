<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/produk', function () {
    return view('produk');
});

// Kirim array data jenis produk ke form tambah produk
Route::get('/tambahproduk', function () {
    $jenisProduk = ['Alat tulis', 'Elektronik', 'Sembako'];
    return view('tambahproduk', ['jenisProduk' => $jenisProduk]);
});