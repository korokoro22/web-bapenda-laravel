<?php

use App\Http\Controllers\ArsippergubController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuratkeluarController;
use App\Http\Controllers\SuratmasukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('menu-utama');
})->middleware('auth:masuk'); 

Route::get('/home', function () {
    return view('menu-utama');
})->middleware('auth:masuk'); 

Route::get('/testing', function() {
    return view('testing');
});

// Route::get('/surat-masuk', [SuratmasukController::class, 'index']);
// Route::get('/surat-masuk-tambah', [SuratmasukController::class, 'create']);
// Route::post('/surat-masuk-store', [SuratmasukController::class, 'store']);

Route::resource('surat-masuk', SuratmasukController::class)->middleware('auth:masuk');
Route::resource('surat-keluar', SuratkeluarController::class)->middleware('auth:masuk');
Route::resource('arsip-pergub', ArsippergubController::class)->middleware('auth:masuk');


Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth:masuk');