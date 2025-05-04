<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\KontakController;

Route::get('/', function () {
    return view('welcome');
});

//all route
Route::get('/', [PageController::class, 'beranda']);
Route::get('/profil', [PageController::class, 'profil']);
Route::get('/layanan', [PageController::class, 'layanan']);
Route::get('/kontak', [PageController::class, 'kontak']);
Route::get('/galeri', [PageController::class, 'galeri']);

// Route go ngirim pesan
Route::get('/kontak', [ContactController::class, 'index'])->name('kontak.index');
Route::post('/kontak', [ContactController::class, 'store'])->name('kontak.store');