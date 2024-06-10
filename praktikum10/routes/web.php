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
use App\Http\Controllers\RyanController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\KelurahanController;


Route::get('/', [RyanController::class, 'index']);
//Route::get('ryan/pasien', [PasienController::class, 'index']);
Route::get('ryan/pasien', [PasienController::class, 'index'])->name('pasiens.index');
Route::get('ryan/pasien/create', [PasienController::class, 'create'])->name('pasiens.create');
Route::post('ryan/pasien/store', [PasienController::class, 'store'])->name('pasiens.store');
Route::get('ryan/pasien/{pasien}', [PasienController::class, 'show'])->name('pasiens.show');
Route::delete('ryan/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasiens.destroy');
Route::get('/admin/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');
Route::put('/admin/pasien/{pasien}', [PasienController::class, 'update'])->name('pasiens.update');

//kelurahan
Route::get('/admin/kelurahan', [KelurahanController::class, 'index'])->name('kelurahans.index');
Route::get('ryan/kelurahan/create', [kelurahanController::class, 'create'])->name('kelurahans.create');
Route::post('ryan/kelurahan/store', [kelurahanController::class, 'store'])->name('kelurahan.store');
Route::get('ryan/kelurahan/{kelurahan}', [kelurahanController::class, 'show'])->name('kelurahans.show');
Route::delete('ryan/kelurahan/{kelurahan}', [kelurahanController::class, 'destroy'])->name('kelurahan.destroy');
Route::get('/admin/kelurahan/{kelurahan}/edit', [kelurahanController::class, 'edit'])->name('kelurahan.edit');
Route::put('/admin/kelurahan/{kelurahan}', [kelurahanController::class, 'update'])->name('kelurahans.update');


