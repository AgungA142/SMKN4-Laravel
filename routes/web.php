<?php

use App\Http\Controllers\SiswaController;
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
    return view('Siswa/home');
});

Route::get('/beranda', [SiswaController::class, 'daftarSiswa']);
Route::get('/tambah-siswa', [SiswaController::class, 'tambahSiswa']);
Route::post('/tambah-data', [SiswaController::class, 'tambahData']);