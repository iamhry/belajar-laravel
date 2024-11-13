<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
Route::get('/', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

//route mahasiswa
Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa');
//route tambah mahasiswa
Route::get('/mahasiswa/tambah', [App\Http\Controllers\MahasiswaController::class, 'tambah'])->name('tambah');
//store data mahasiswa
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
