<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\BoletoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\reservaController;

//Rutas para las boletas
Route::get('/boletos', [BoletoController::class,'index']);//Sirve para mostrar todos los registros
Route::post('/boletos', [BoletoController::class,'store']);//Sirve para crear un registro
Route::put('/boletos/{id}', [BoletoController::class,'update']);//Sirve para actualizar un registro
Route::delete('/boletos/{id}', [BoletoController::class,'destroy']);//Sirve para eliminar un registro

//Rutas para los usuarios
Route::get('/usuarios', [UsuarioController::class,'index']);//Sirve para mostrar todos los registros
Route::post('/usuarios', [UsuarioController::class,'store']);//Sirve para crear un registro

//Rutas para reservas
Route::get('/reservas', [reservaController::class,'index']);//Sirve para mostrar todos los registros
Route::post('/reservas', [reservaController::class,'store']);//Sirve para crear un registro

