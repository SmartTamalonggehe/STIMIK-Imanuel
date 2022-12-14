<?php

use App\Http\Controllers\Laporan\LaporanControllerPDF;
use Illuminate\Support\Facades\Route;

Route::prefix('pdf')->group(function () {
    Route::get('aset-bergerak', [LaporanControllerPDF::class, 'asetBergerak'])->name('laporan.pdf.aset-bergerak');
    Route::get('aset-tidak-bergerak', [LaporanControllerPDF::class, 'asetDiam'])->name('laporan.pdf.aset-diam');
});
