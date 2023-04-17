<?php

use App\Http\Controllers\AdminRolController;
use App\Http\Controllers\ComentarioController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InscribeUsuarioEventoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ComentarioController::class, 'indexWelcome']);

Auth::routes();

Route::get('certificados/pdf/{id}', [App\Http\Controllers\CertificadoController::class, 'pdf'])->name('certificados.pdf');

Route::resource('perfil',  App\Http\Controllers\UserController::class)->middleware('auth');

Route::resource('eventos',  App\Http\Controllers\EventoController::class)->middleware('auth');
Route::resource('ambientes',  App\Http\Controllers\AmbienteController::class)->middleware('auth');
Route::resource('materiales',  App\Http\Controllers\MaterialeController::class)->middleware('auth');
Route::resource('expositores',  App\Http\Controllers\ExpositoreController::class)->middleware('auth');
Route::resource('charlas',  App\Http\Controllers\CharlaController::class)->middleware('auth');
Route::resource('certificados',  App\Http\Controllers\CertificadoController::class)->middleware('auth');
Route::resource('inscribe-usuario-eventos',  App\Http\Controllers\InscribeUsuarioEventoController::class)->middleware('auth');

Route::resource('comentarios',  App\Http\Controllers\ComentarioController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/inscribir', [InscribeUsuarioEventoController::class, 'inscrito'])->name('inscribir_usuario');

Route::resource('users', AdminRolController::class)->names('users');
