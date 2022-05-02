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

Route::get('/clientes/listar', [ClientesControllers::class, 'listar'])->name('clientes_listar');

Route::middleware('auth')->group(function () {
    // Rotas relacionadas ao cliente
    Route::get('/clientes/novo', [ClientesControllers::class, 'cadastro_novo'])->name('cliente_cadastro');
    Route::post('/clientes/novo', [ClientesControllers::class, 'novo'])->name('clientes_novo');
    #Route::get('/clientes/listar', [ClientesControllers::class, 'listar'])->name('clientes_listar');
    Route::get('/clientes/alterar/{id}', [ClientesControllers::class, 'alterar'])->name('cliente_alterar');
    Route::post('/clientes/alterar', [ClientesControllers::class, 'salvar'])->name('clientes_salvar');
    Route::get('/clientes/excluir/{id}', [ClientesControllers::class, 'excluir'])->name('cliente_excluir');

    // Rotas relacionadas ao produto
    Route::get('/produto/cadastro', [ProdutoController::class, 'cadastro_novo'])->name('produto_cadastro');
    Route::post('/produto/novo', [ProdutoController::class, 'novo'])->name('produtos_novo');
    Route::get('/produto/lista', [ProdutoController::class, 'listar'])->name('produto_listar');
    Route::get('/produto/fornecedor/lista/{id}', [ProdutoController::class, 'listar_por_fonercedor'])->name('fornecedor_lista_produtos');

    // Rotas relacionadas aos fornecedores
    Route::get('/fornecedores/cadastro', [ForncedoresController::class, 'cadastro_novo'])->name('fornecedor_cadastro');
    Route::post('/fornecedores/novo', [ForncedoresController::class, 'novo'])->name('forncedores_novo');
    Route::get('/fornecedores/listar', [ForncedoresController::class, 'listar'])->name('fornecedor_listar');
    Route::get('/fornecedores/alterar/{id}', [ForncedoresController::class, 'alterar'])->name('fornecedor_alterar');
    Route::post('/fornecedores/editar', [ForncedoresController::class, 'editar'])->name('fornecedores_editar');
    Route::get('/fornecedores/excluir/{id}', [ForncedoresController::class, 'excluir'])->name('fornecedor_excluir');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
