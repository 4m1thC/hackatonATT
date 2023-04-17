<?php

use App\Http\Controllers\Api\V1\EventoController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\InscribeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::apiResource('eventos', EventoController::class);
Route::apiResource('usuarios', UserController::class);
Route::apiResource('inscripciones', InscribeController::class);