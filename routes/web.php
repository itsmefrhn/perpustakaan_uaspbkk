<?php

use App\Http\Controllers\Petugas\KategoriController;
use App\Http\Controllers\Petugas\RakController;
use App\Http\Controllers\Petugas\PenerbitController;
use App\Models\Rak;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('petugas/dashboard');
});

Route::get('/kategori', KategoriController::class);
Route::get('/rak', RakController::class);
Route::get('/penerbit', PenerbitController::class);
