<?php

use App\Http\Controllers\CuartelController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\SoldadoController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelIgnition\Solutions\SolutionProviders\RouteNotDefinedSolutionProvider;

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

Route::get('Formulario', [SoldadoController::class, 'index']);
Route::get('Formulario/guardar', [SoldadoController::class, 'guardar']);
Route::get('Formulario2', [CuartelController::class, 'index']);
Route::get('Formulario2/guardar', [CuartelController::class, 'guardar']);