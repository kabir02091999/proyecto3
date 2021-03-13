<?php

use App\Http\Controllers\cambiosController;
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

Route::get('/', [cambiosController::class,'principa'])->name('principal');

Route::get('cable', [cambiosController::class,'cable'])->name('cable');

Route::get('internet', [cambiosController::class,'internet'])->name('internet');

Route::get('llamada', [cambiosController::class,'llamada'])->name('llamada');

Route::get('paquetes', [cambiosController::class,'paquetes'])->name('paquetes');


