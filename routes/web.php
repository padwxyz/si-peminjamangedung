<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing_page.home');
})->name('home');

Route::get('/masuk', function () {
    return view('auth.login');
})->name('masuk');

Route::get('/daftar', function () {
    return view('auth.register');
})->name('daftar');

Route::get('/urb', function () {
    return view('pages.index');
})->name('urb');

Route::get('/gedung', function () {
    return view('pages.gedung');
})->name('gedung');

Route::get('/detail_gedung', function () {
    return view('pages.detail_gedung');
})->name('detail_gedung');

Route::get('/detail_ruangan', function () {
    return view('pages.detail_ruangan');
})->name('detail_ruangan');

Route::get('/peminjaman', function () {
    return view('pages.pinjam');
})->name('peminjaman');

Route::get('/riwayat', function () {
    return view('pages.riwayat');
})->name('riwayat');
