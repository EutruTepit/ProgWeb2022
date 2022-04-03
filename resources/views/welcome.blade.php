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
            <div class="row">
                <a href="{{ route('cliente_cadastro') }}" class="btn btn-primary mb-3">Cadastro cliente</a>
                <a href="{{ route('clientes_listar') }}" class="btn btn-primary mb-3">Lista de cliente</a>
            </div>
            <hr>
            <div class="row">
                <a href="{{ route('produto_cadastro') }}" class="btn btn-primary mb-3">Cadastro Produto</a>
                <a href="{{ route('produto_listar') }}" class="btn btn-primary mb-3">Lista de produtos</a>
            </div>
            <hr>
            <div class="row">
                <a href="{{ route('fornecedor_cadastro') }}" class="btn btn-primary mb-3">Cadastro Fornecedores</a>
                <a href="{{ route('fornecedor_listar') }}" class="btn btn-primary mb-3">Listar Fornecedores</a>
            </div>
        </div>
        <div class="col-2"></div>
    </div>    
@endsection