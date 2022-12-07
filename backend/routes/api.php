<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViajesController;
use App\Http\Controllers\LugaresController;
use App\Http\Controllers\Lugares_ViajesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

// GET = optener datos.
// POST = Crear datos.
// PUT = Actualizar datos.
// DELETE = Eliminar datos.

/*Route::middleware(['auth:sanctum'])->group(function () {

});*/

Route::get('/lugares', [LugaresController::class, 'index']);
Route::post('/lugares', [LugaresController::class, 'agregar']);
Route::put('/lugares/{id}', [LugaresController::class, 'actualizar']);
Route::delete('/lugares/{id}', [LugaresController::class, 'eliminar']);

Route::get('/viajes', [ViajesController::class, 'index']);
Route::post('/viajes', [ViajesController::class, 'agregar']);
Route::put('/viajes/{id}', [ViajesController::class, 'actualizar']);
Route::delete('/viajes/{id}', [ViajesController::class, 'eliminar']);

Route::get('/lugaresviajes', [Lugares_ViajesController::class, 'index']);
Route::post('/lugaresviajes', [Lugares_ViajesController::class, 'agregar']);
Route::put('/lugaresviajes/{id}', [Lugares_ViajesController::class, 'actualizar']);
Route::delete('/lugaresviajes/{id}', [Lugares_ViajesController::class, 'eliminar']);
