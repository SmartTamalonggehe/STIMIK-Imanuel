<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('kepala.dashboard.index');
})->name('kepala');

Route::get('aset-bergerak', function () {
    return view('kepala.aset_bergerak.index');
})->name('kepala.aset-bergerak');
Route::get('aset-diam', function () {
    return view('kepala.aset_diam.index');
})->name('kepala.aset-diam');
