<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota');
Route::get('/tambahanggota', [AnggotaController::class, 'create'])->name('tambah_anggota');
Route::PUT('/tambahanggota', [AnggotaController::class, 'store'])->name('simpan_anggota');
Route::get('/editanggota/{anggota}', [AnggotaController::class, 'edit'])->name('edit_anggota');
Route::PATCH('/editanggota', [AnggotaController::class, 'update'])->name('update_anggota');
Route::get('/deleteanggota/{anggota}', [AnggotaController::class, 'destroy'])->name('delete_anggota');

Route::get('/buku', [BukuController::class, 'index'])->name('buku');
Route::get('/tambahbuku', [BukuController::class, 'create'])->name('tambah_buku');
Route::PUT('/tambahbuku', [BukuController::class, 'store'])->name('simpan_buku');
Route::get('/editbuku/{buku}', [BukuController::class, 'edit'])->name('edit_buku');
Route::PATCH('/editbuku', [BukuController::class, 'update'])->name('update_buku');
Route::get('/deletebuku/{buku}', [BukuController::class, 'destroy'])->name('delete_buku');