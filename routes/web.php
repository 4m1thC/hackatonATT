<?php

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

Route::resource('eventos',  App\Http\Controllers\EventoController::class);
Route::resource('ambientes',  App\Http\Controllers\AmbienteController::class);
Route::resource('materiales',  App\Http\Controllers\MaterialeController::class);
Route::resource('expositores',  App\Http\Controllers\ExpositoreController::class);
Route::resource('charlas',  App\Http\Controllers\CharlaController::class);
Route::resource('certificados',  App\Http\Controllers\CertificadoController::class);
Route::resource('comentarios',  App\Http\Controllers\ComentarioController::class);
Route::resource('inscribe-usuario-eventos',  App\Http\Controllers\InscribeUsuarioEventoController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
