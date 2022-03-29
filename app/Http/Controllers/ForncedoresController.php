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

}
