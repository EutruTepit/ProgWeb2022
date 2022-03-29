@extends('template')

@section('titulo')
Lista de Produtos  
@endsection

@section('conteudo')
    <div class="row pt-4">
        <h1 class="text-center">
            Lista de Produtos
        </h1>
    </div>

    <div class="row mt-5">
        <div class="col-2"></div>
        <div class="col-8">
            <table class="table">
                <thead>
                    <th scope="col">#id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Cep</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                </thead>

                <tbody>
                    @foreach ($forncedores as $f )
                        <tr>
                            <td> {{ $f->id }} </td>
                            <td> {{ $f->nome }} </td>
                            <td> {{ $f->endereco }} </td>
                            <td> {{ $f->cep }} </td>
                            <td> {{ $f->cidade }} </td>
                            <td> {{ $f->estado_id }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('fornecedor_cadastro') }}" class="btn btn-primary">Novo</a>
        </div>
        <div class="col-2"></div>
    </div>

@endsection