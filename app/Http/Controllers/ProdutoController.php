<?php

namespace App\Http\Controllers;

use App\Models\Fornecedores;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdutoController extends Controller
{
    // Pagina de cadastro de novos Produtos
    function cadastro_novo(){
        $fornecedores = Fornecedores::all();
        return view('cadastro_produto', ['fornecedores' => $fornecedores]);
    }

    // Cadastro de novos produtos
    function novo(Request $req){
        $produto = new Produto();
        $produto->nome = $req->input('nome');
        $produto->categoria = $req->input('categoria');
        $produto->preco = $req->input('preco');
        $produto->fornecedores_id = $req->input('fornecedor_id');
        #$produto->slug = ""; # default no banco, n necessário prover 
        #$produto->caminho = "";

        $produto->save();

        $produto->slug = Str::slug("{$produto->nome}{$produto->id}");
        $imagem = $req->file('file');
        $caminho_arquivo = $imagem->storeAs('produtos', "{$produto->id}.{$imagem->extension()}");
        $produto->caminho = "/storage/$caminho_arquivo";

        $produto->save();

        return redirect()->route('produto_listar');
    }

    // Listagem de produtos
    function listar(){
        $produtos = Produto::all();
        return view('lista_produto', ['produtos' => $produtos]);
    }

    function exibir($slug){
        $produto = Produto::where('slug', '=', $slug)->first();

        return view('exibe_produto', ['produto' => $produto]);
    }

    function listar_por_fonercedor($id){
        $fornecedor = Fornecedores::findOrFail($id);

        return view('lista_produto', ['fornecedor' =>$fornecedor ,'produtos' => $fornecedor->produtos]);
    }
}
