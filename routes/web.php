<?php

use App\Http\Controllers\ClientesControllers;
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
    return view('welcome');
});

Route::get('clientes/novo', [ClientesControllers::class, 'cadastro_novo']);

Route::post('/clientes/novo', [ClientesControllers::class, 'novo'])->name('clientes_novo');

Route::get('clientes/listar', [ClientesControllers::class, 'listar'])->name('clientes_listar');
