<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KompetensiController;
use Illuminate\Support\Facades\Route;

// Rute untuk Mahasiswa
Route::resource('mahasiswa', MahasiswaController::class);

// Rute untuk Kompetensi dengan parameter mahasiswaId
Route::prefix('mahasiswa/{mahasiswaId}/kompetensi')->group(function () {
    Route::get('/', [KompetensiController::class, 'index'])->name('kompetensi.index');
    Route::get('/create', [KompetensiController::class, 'create'])->name('kompetensi.create');
    Route::post('/', [KompetensiController::class, 'store'])->name('kompetensi.store');
    Route::get('/{kompetensi}/edit', [KompetensiController::class, 'edit'])->name('kompetensi.edit');
    Route::put('/{kompetensi}', [KompetensiController::class, 'update'])->name('kompetensi.update');
    Route::delete('/{kompetensi}', [KompetensiController::class, 'destroy'])->name('kompetensi.destroy');
});


