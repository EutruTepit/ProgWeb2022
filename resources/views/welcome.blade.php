@extends('template')

@section('titulo')
Welcome | Links
@endsection

@section('conteudo')
    <div class="row pt-4">
        <h1 class="text-center">
            Links
        </h1>
    </div>

    <div class="row mt-5 text-center">
        <div class="col-2"></div>
        <div class="col-8">
            <a href="{{ route('cliente_cadastro') }}" class="btn btn-primary">Cadastro cliente</a>
            <a href="{{ route('clientes_listar') }}" class="btn btn-primary">Listas de cliente</a>
            <a href="{{ route('produto_cadastro') }}" class="btn btn-primary">Cadastro Produto</a>
            <a href="{{ route('produto_listar') }}" class="btn btn-primary">Listas de produtos</a>
        </div>
        <div class="col-2"></div>
    </div>    
@endsection