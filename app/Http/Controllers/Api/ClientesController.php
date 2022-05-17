<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cliente::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $conteudo = json_decode($req->getContent(), 1);
        $cliente = new Cliente();
        $cliente->nome = $conteudo['nome'];
        $cliente->telefone = $conteudo['telefone'];
        $cliente->renda = $conteudo['renda'];

        $cliente->save();

        return $cliente;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Cliente::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $conteudo = json_decode($req->getContent(), 1);
        $cliente = Cliente::findOrFail($id);
        $cliente->nome = $conteudo['nome'];
        $cliente->telefone = $conteudo['telefone'];
        $cliente->renda = $conteudo['renda'];

        $cliente->save();

        return $cliente;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
