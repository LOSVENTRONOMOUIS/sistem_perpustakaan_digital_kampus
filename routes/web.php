<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\Praktikum4Controller;
use App\Http\Controllers\IndahP4Controller;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::view('/home', 'home');
// Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/katalog', 'katalog_buku');
Route::view('/peminjaman', 'data_peminjaman')->name('peminjaman');
Route::view('/list', 'list_barang');
Route::view('/login', 'login');
Route::view('/profile', 'Profile');
Route::view('/contact', 'contact');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/user/{id}', function ($id) {
    return 'user dengan ID ' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});

// Route::get('/listbarang/{id}/{nama}', function($id, $nama){
//     return view('list_barang', compact('id', 'nama'));
// });

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/katalog', [BukuController::class, 'index']);
Route::get('/praktikum4', [Praktikum4Controller::class, 'getData']);
Route::get('/indahP4', [IndahP4Controller::class, 'tampilkan']);