<?php

use App\Http\Controllers\CRUD\AsetBergerakController;
use App\Http\Controllers\CRUD\AsetDiamController;
use App\Http\Controllers\CRUD\JenisController;
use App\Http\Controllers\CRUD\RuanganController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'jenis' => JenisController::class,
    'ruangan' => RuanganController::class,
    'aset_bergerak' => AsetBergerakController::class,
    'aset_diam' => AsetDiamController::class,
]);
