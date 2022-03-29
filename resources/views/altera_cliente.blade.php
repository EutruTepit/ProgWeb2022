@extends('template')

@section('titulo')
    Alterar Cliente
@endsection

@section('conteudo')
    <h1>Alterar Cliente #{{ $cliente->id }}</h1>
    <form action="{{ route('clientes_salvar') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $cliente->id }}">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $cliente->nome }}"><br>

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="{{ $cliente->telefone }}"><br>

        <label for="renda">Renda</label>
        <input type="text" name="renda" id="renda" value="{{ $cliente->renda }}"><br>

        <a href="{{ route('clientes_listar') }}" class="btn btn-primary">Voltar</a>
        <input type="submit" value="Salvar" class="btn btn-primary">
    </form>
@endsection
