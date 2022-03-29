<?php

use App\Http\Controllers\ClientesControllers;
use App\Http\Controllers\ForncedoresController;
use App\Http\Controllers\ProdutoController;
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
})->name('home');

// Rotas relacionadas ao cliente
Route::get('/clientes/novo', [ClientesControllers::class, 'cadastro_novo'])->name('cliente_cadastro');
Route::post('/clientes/novo', [ClientesControllers::class, 'novo'])->name('clientes_novo');
Route::get('/clientes/listar', [ClientesControllers::class, 'listar'])->name('clientes_listar');
Route::get('/clientes/alterar/{id}', [ClientesControllers::class, 'alterar'])->name('cliente_alterar');
Route::post('/clientes/alterar', [ClientesControllers::class, 'salvar'])->name('clientes_salvar');
Route::get('/clientes/excluir/{id}', [ClientesControllers::class, 'excluir'])->name('cliente_excluir');

// Rotas relacionadas ao produto
Route::get('/produto/cadastro', [ProdutoController::class, 'cadastro_novo'])->name('produto_cadastro');
Route::post('/produto/novo', [ProdutoController::class, 'novo'])->name('produtos_novo');
Route::get('/produto/lista', [ProdutoController::class, 'listar'])->name('produto_listar');

// Rotas relacionadas aos fornecedores
Route::get('/fornecedores/cadastro', [ForncedoresController::class, 'cadastro_novo'])->name('fornecedor_cadastro');