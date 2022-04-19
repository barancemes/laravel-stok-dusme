<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/urun',[\App\Http\Controllers\UrunController::class,'index'])->name('urun');
Route::get('/ekle/{id}',[\App\Http\Controllers\UrunController::class,'urunEkle'])->name('urun-ekle');

Route::get('/market',[\App\Http\Controllers\MarketController::class,'index'])->name('market');
Route::get('/market/{id}',[\App\Http\Controllers\MarketController::class,'sil'])->name('marketsil');
Route::get('/market-sil',[\App\Http\Controllers\MarketController::class,'bosalt'])->name('bosalt');
