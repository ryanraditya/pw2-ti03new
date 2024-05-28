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
Route::get('ryan/pasien', [PasienController::class, 'index']);


