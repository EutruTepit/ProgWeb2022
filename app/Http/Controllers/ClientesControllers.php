<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesControllers extends Controller{
    function cadastro_novo(){
        return view('novo_cliente');
    }

    // recebe metodo post
    function novo(Request $req){
        $cliente = new Cliente();
        $cliente->nome = $req->input('nome');
        $cliente->telefone = $req->input('telefone');
        $cliente->renda = $req->input('renda');

        $cliente->save();

        return redirect()->route('clientes_listar');
    }

    function listar(){
        $clientes = Cliente::all();
        return view('lista_cliente', ['clientes' => $clientes]);
    }

    function alterar($id){
        $cliente = Cliente::findOrFail($id);
        return view('altera_cliente', ['cliente' => $cliente]);
    }

    function salvar(Request $req){
        $id = $req->input('id');

        $cliente = Cliente::findOrFail($id);
        $cliente->nome = $req->input('nome');
        $cliente->telefone = $req->input('telefone');
        $cliente->renda = $req->input('renda');

        $cliente->save();

        return redirect()->route('clientes_listar');
    }

    function excluir($id){
        Cliente::findOrFail($id)->delete();

        return redirect()->route('clientes_listar');
    }
}
