<?php

use App\Http\Controllers\API\AsetAPI;
use App\Http\Controllers\API\RuanganAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('ruangan', [RuanganAPI::class, 'index'])->name('api.ruangan');

Route::get('chart', [AsetAPI::class, 'chart'])->name('api.chart');
