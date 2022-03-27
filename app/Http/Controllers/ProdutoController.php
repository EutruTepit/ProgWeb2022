<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Pagina de cadastro de novos Produtos
    function cadastro_novo(){
        return view('cadastro_produto');
    }

    // Cadastro de novos produtos
    function novo(Request $req){
        $produto = new Produto();
        $produto->nome = $req->input('nome');
        $produto->categoria = $req->input('categoria');
        $produto->preco = $req->input('preco');

        $produto->save();

        return redirect()->route('produto_listar');
    }

    // Listagem de produtos
    function listar(){
        $prdutos = Produto::all();
        return view('lista_produto', ['produtos' => $prdutos]);
    }
}
