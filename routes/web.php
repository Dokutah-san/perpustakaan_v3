<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\Cetak_kartuController;
use App\Http\Controllers\Data_bukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\DatausersController;
use App\Http\Controllers\LoginController;

Route::get('/dashboard', [DashboardController::class,'index']);
//Anggota
Route::get('/daftar', [DaftarController::class,'index']);
Route::get('/cetak_kartu', [Cetak_kartuController::class,'index']);
//Buku
Route::get('/data_buku', [Data_bukuController::class,'index']);
//Transaksi
Route::get('/peminjaman', [PeminjamanController::class,'index']);
Route::get('/pengembalian', [PengembalianController::class,'index']);
//USERS
Route::get('/data_users', [DatausersController::class,'index']);
Route::get('/useradd', [DatausersController::class,'add']);
Route::post('/userstore', [DatausersController::class,'userstore']);
Route::get('/useredit/{id}', [DatausersController::class,'edit']);
Route::post('/editsave/{id}', [DatausersController::class,'editsave']);
Route::delete('/delete/{id}', [DatausersController::class,'delete']);
//Login
Route::get('/', [LoginController::class,'index']);
Route::post('/proseslogin', [LoginController::class,'proseslogin']);
Route::get('/logout', [LoginController::class,'logout']);