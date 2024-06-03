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


Route::get('/', [RyanController::class, 'index']);
//Route::get('ryan/pasien', [PasienController::class, 'index']);
Route::get('ryan/pasien', [PasienController::class, 'index'])->name('pasiens.index');
Route::get('ryan/pasien/create', [PasienController::class, 'create'])->name('pasiens.create');
Route::post('ryan/pasien/store', [PasienController::class, 'store'])->name('pasiens.store');
Route::get('ryan/pasien/{pasien}', [PasienController::class, 'show'])->name('pasiens.show');
Route::delete('ryan/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasiens.destroy');
Route::get('/admin/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');
Route::put('/admin/pasien/{pasien}', [PasienController::class, 'update'])->name('pasiens.update');


