<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuzzifikasiController;
use App\Http\Controllers\InferensiController;
use App\Http\Controllers\DefuzzifikasiController;

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
    return view('dashboard');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

//Route::get('inferensi', 'InferensiController@index');

Route::get('rules', [InferensiController::class, 'index']);

Route::get('input', function () {
    return view('input');
});

//Route::post('/submit', 'DefuzzifikasiController@submit');

//Route::post('hasil', [DefuzzifikasiController::class, 'submit']);

Route::post('hasil', [FuzzifikasiController::class, 'hasilFuzzifikasi']);

Route::post('defuzzifikasi', [DefuzzifikasiController::class, 'hasilDefuzzifikasi']);

Route::get('kategori', [FuzzifikasiController::class, 'showValue']);

Route::post('kategori/update', [FuzzifikasiController::class, 'update'])->name('kategori.update');

// Route::post('hasil-akhir', function () {
//     app()->call(FuzzifikasiController::class . '@hasilFuzzifikasi');
//     app()->call(DefuzzifikasiController::class . '@hasilDefuzzifikasi');
// })->name('hasil.akhir');
