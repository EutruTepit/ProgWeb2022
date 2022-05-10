@extends('template')

@section('titulo')
Lista de Produtos  
@endsection

@section('conteudo')
    <div class="row pt-4">
        <h1 class="text-center">
            Lista de Produtos @if ( !empty($fornecedor) )
                do fornecedor {{ $fornecedor->nome }}.
            @endif
        </h1>
    </div>

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
                    @foreach ($produtos as $p )
                        <tr>
                            <td> <a href="{{ route('exibir_produto', ['slug' => $p->slug]) }}">{{ $p->id }}</a> </td>
                            <td> {{ $p->nome }} </td>
                            <td> {{ $p->categoria }} </td>
                            <td> {{ $p->preco }} </td>
                            <td> {{ $p->fornecedor->nome }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('produto_cadastro') }}" class="btn btn-primary">Novo</a>
        </div>
        <div class="col-2"></div>
    </div>

@endsection