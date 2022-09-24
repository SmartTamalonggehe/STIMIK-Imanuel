<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard.index');
})->name('admin');

Route::get('ruangan', function () {
    return view('admin.ruangan.index');
})->name('admin.ruangan');

Route::prefix('aset')->group(function () {
    Route::get('bergera', function () {
        return view('admin.aset_bergerak.index');
    })->name('admin.aset.bergerak');
});
