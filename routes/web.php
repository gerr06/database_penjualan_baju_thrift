<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;

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

Route::get('/', function () {
    return view('welcome');
});

// Halaman utama pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');

// Menampilkan form tambah
Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');

// Menyimpan data pelanggan (dummy)
Route::post('/pelanggan', [PelangganController::class, 'store'])->name('pelanggan.store');

// Menampilkan detail pelanggan
Route::get('/pelanggan/{id}', [PelangganController::class, 'show'])->name('pelanggan.show');

// Menampilkan form edit
Route::get('/pelanggan/{id}/edit', [PelangganController::class, 'edit'])->name('pelanggan.edit');

// Menyimpan perubahan edit (dummy)
Route::put('/pelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');

// Menghapus data pelanggan (dummy)
Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');
