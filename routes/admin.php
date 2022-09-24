<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard.index');
})->name('admin');

Route::get('ruangan', function () {
    return view('admin.ruangan.index');
})->name('admin.ruangan');

Route::prefix('masuk')->group(function () {
    Route::get('aset-bergerak', function () {
        return view('admin.aset_bergerak.index', [
            'jenis' => 1
        ]);
    })->name('admin.masuk.aset.bergerak');
});
Route::prefix('keluar')->group(function () {
    Route::get('aset-bergerak', function () {
        return view('admin.aset_bergerak.index', [
            'jenis' => 2
        ]);
    })->name('admin.keluar.aset.bergerak');
});
