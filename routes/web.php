<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\RacaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnimalUsuarioController;

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
Route::resource('/', HomeController::class);
Route::resource('/estado', EstadoController::class);
Route::resource('/cidade', CidadeController::class);
Route::resource('/endereco', EnderecoController::class);
Route::resource('/tipo', TipoController::class);
Route::resource('/raca', RacaController::class);
Route::resource('/usuario', UsuarioController::class);
Route::resource('/animal', AnimalController::class);
Route::resource('/animalUsuario', AnimalUsuarioController::class);