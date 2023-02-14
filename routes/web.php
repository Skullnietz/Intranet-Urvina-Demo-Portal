<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\ConsultasCController;

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
    return view('auth.login');
});

Auth::routes();

// Inicio
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Catalogo
Route::get('/catalogo', [CatalogoController::class, 'index'])->name('catalogo');

//Consultas Clientes
Route::get('/consultas', [ConsultasCController::class, 'index'])->name('consultasc');
