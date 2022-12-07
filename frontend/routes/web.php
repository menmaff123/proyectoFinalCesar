<?php

use App\Http\Controllers\Lugares;
use App\Http\Controllers\Viajes;
use App\Http\Controllers\LugaresViajes;
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
    return view('index');
});

//Rutas para los lugares
Route::get('/lugares', [Lugares::class, 'getLugares']);
Route::post('/lugares', [Lugares::class, 'agregarLugar']);
Route::delete('/lugares/delete/{id}', [Lugares::class, 'borrarLugar']);
Route::post('/lugares/{id}', [Lugares::class, 'actualizarLugar']);

//Rutas para los viajes
Route::get('/viajes', [Viajes::class, 'getViajes']);
Route::post('/viajes', [Viajes::class, 'agregarViaje']);
Route::delete('/viajes/delete/{id}', [Viajes::class, 'borrarViaje']);
Route::post('/viajes/{id}', [Viajes::class, 'actualizarViaje']);

//Rutas para los viajes
Route::get('/compra', [LugaresViajes::class, 'getVuelos']);
Route::post('/compra', [LugaresViajes::class, 'agregarCompra']);
Route::delete('/compra/delete/{id}', [LugaresViajes::class, 'borrarCompra']);
Route::post('/compra/{id}', [LugaresViajes::class, 'actualizarCompra']);
