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
Route::post('/', [cambiosController::class,'crear_telecable'])->name('crear.telecable');

Route::get('/', [cambiosController::class,'principa'])->name('principal');

Route::get('cable', [cambiosController::class,'cable'])->name('cable');

Route::get('internet', [cambiosController::class,'internet'])->name('internet');

Route::get('llamada', [cambiosController::class,'llamada'])->name('llamada');

Route::get('paquetes', [cambiosController::class,'paquetes'])->name('paquetes');

Route::post('login',[cambiosController::class,'login'])->name('login');

Route::post('/subir_telecomunicacion', [cambiosController::class,'crear_telecable'])->name('crear.telecable');

Route::post('/subir_internet', [cambiosController::class,'nuevo_telefonia'])->name('nuevo.plan');

Route::post('/subir_interne', [cambiosController::class,'nuevo_internet'])->name('nuevo_internet');


Route::post('/subir_paquete', [cambiosController::class,'nuevo_paquete'])->name('nuevo.paquetes');


Route::post('/nuevo_usuario}', [cambiosController::class,'nuevo_usuario'])->name('nuevo.usuario');


Route::get('logi/administrador', [cambiosController::class,'administrador'])->name('administrador');

Route::get('logi/usuario', [cambiosController::class,'usuario'])->name('usuario');



