<?php

namespace App\Http\Controllers;

use App\Models\Estados;
use App\Models\Fornecedores;
use Illuminate\Http\Request;

class ForncedoresController extends Controller
{
    function cadastro_novo(){
        $estados = Estados::all();
        return view('cadastro_fornecedor', ['estados' => $estados]);
    }

    function novo(Request $req){
        $forncedor = new Fornecedores();
        $forncedor->nome = $req->input('nome');
        $forncedor->endereco = $req->input('endereco');
        $forncedor->cep = $req->input('cep');
        $forncedor->cidade = $req->input('cidade');
        $forncedor->estado_id = $req->input('estado_id');

        $forncedor->save();

        return redirect()->route('fornecedor_listar');
    }

    function listar(){
        $forncedores = Fornecedores::all();
        return view('lista_fornecedor', ['forncedores' => $forncedores]);
    }

    function alterar($id){
        $forncedor = Fornecedores::findOrFail($id);
        $estados = Estados::all();
        return view('editar_fornecedor', ['fornecedor' => $forncedor, 'estados' => $estados]);
    }

    function editar(Request $req){
        $id = $req->input('id');

        $forncedor = Fornecedores::findOrFail($id);
        $forncedor->nome = $req->input('nome');
        $forncedor->endereco = $req->input('endereco');
        $forncedor->cep = $req->input('cep');
        $forncedor->cidade = $req->input('cidade');
        $forncedor->estado_id = $req->input('estado_id');

        $forncedor->save();

        return redirect()->route('fornecedor_listar');
    }

    function excluir($id){
        Fornecedores::findOrFail($id)->delete();

        return redirect()->route('fornecedor_listar');
    }

    function get_produtos($id){
        return to_route('fornecedor_lista_produtos', ['id' => $id]);
    }

}
