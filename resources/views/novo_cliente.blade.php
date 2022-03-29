@extends('template')

@section('titulo')
Cliente Novo 
@endsection

@section('conteudo')
    <h1>Novo Cliente</h1>
    <form action="{{ route('clientes_novo') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"><br>

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone"><br>

        <label for="renda">Renda</label>
        <input type="text" name="renda" id="renda"><br>

        <input type="submit" value="Enviar">
    </form>
@endsection