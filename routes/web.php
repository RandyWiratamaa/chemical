<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index'])->name('barang');
Route::post('/barang', [App\Http\Controllers\BarangController::class, 'store'])->name('barang.store');
Route::get('/satuan', [App\Http\Controllers\SatuanController::class, 'index'])->name('satuan');
Route::post('/satuan', [App\Http\Controllers\SatuanController::class, 'store'])->name('satuan.store');

Route::post('/home', [App\Http\Controllers\HomeController::class, 'store'])->name('laporan.store');
Route::match(['put', 'patch'], '/home/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('laporan.update');
Route::delete('/home/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('laporan.delete');
Route::get('getDetailBarang/{id}', [App\Http\Controllers\HomeController::class, 'getDetailBarang'])->name('getDetailBarang');

Route::get('laporan_export', [App\Http\Controllers\HomeController::class, 'exportLaporan'])->name('laporan_export');
