<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BuildingController;

Route::get('/', function () {
    return view('landing_page.home');
})->name('home');

// Route::get('/masuk', function () {
//     return view('auth.login');
// })->name('masuk');

// Route::get('/daftar', function () {
//     return view('auth.register');
// })->name('daftar');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/gedung', [BuildingController::class, 'index'])->name('buildings.index');
Route::get('/gedung/{id}', [BuildingController::class, 'show'])->name('buildings.show');
Route::get('/ruangan/{id}', [BuildingController::class, 'roomDetail'])->name('rooms.show');



Route::get('/urb', function () {
    return view('pages.index');
})->name('urb');


Route::get('/urb', function () {
    return view('pages.index');
})->name('urb');

// Route::get('/gedung', function () {
//     return view('pages.gedung');
// })->name('gedung');

// Route::get('/detail_gedung', function () {
//     return view('pages.detail_gedung');
// })->name('detail_gedung');

// Route::get('/detail_ruangan', function () {
//     return view('pages.detail_ruangan');
// })->name('detail_ruangan');

Route::get('/peminjaman', function () {
    return view('pages.pinjam');
})->name('peminjaman');

Route::get('/riwayat', function () {
    return view('pages.riwayat');
})->name('riwayat');

Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin');


