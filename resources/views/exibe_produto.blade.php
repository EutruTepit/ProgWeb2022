@extends('template')

@section('titulo')
{{$produto->nome}} 
@endsection

@section('conteudo')
    <div class="row mt-5">
        <div class="col-2"></div>
        <div class="col-8">
            <table class="table">
                <thead>
                    <th scope="col">#id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Fornecedor</th>
                </thead>

                <tbody>
                    <tr>
                        <td> {{ $produto->id }}</td>
                        <td> {{ $produto->nome }} </td>
                        <td> {{ $produto->categoria }} </td>
                        <td> {{ $produto->preco }} </td>
                        <td> {{ $produto->fornecedor->nome }} </td>
                    </tr>
                </tbody>
                <img src="{{$produto->caminho}}">
            </table>
            <a href="{{ route('produto_cadastro') }}" class="btn btn-primary">Novo</a>
        </div>
        <div class="col-2"></div>
    </div>

@endsection