@extends('template')

@section('titulo')
Lista de Fornecedores
@endsection

@section('conteudo')
@routes
    <div class="row pt-4">
        <h1 class="text-center">
            Lista de Fornecedores
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
                    <th scope="col">Ações</th>
                </thead>

                <tbody>
                    @foreach ($forncedores as $f )
                        <tr>
                            <td> {{ $f->id }} </td>
                            <td> {{ $f->nome }} </td>
                            <td> {{ $f->endereco }} </td>
                            <td> {{ $f->cep }} </td>
                            <td> {{ $f->cidade }} </td>
                            <td> {{ $f->estado->nome }} </td>
                            <td> 
                                <a href="{{ route('fornecedor_alterar', ['id' => $f->id]) }}" class="btn btn-warning">Alterar</a>
                                <a href="#" onclick="excluir({{ $f->id }})" class="btn btn-danger">Excluir</a>
                                <a href="{{ route('fornecedor_lista_produtos', ['id' => $f->id]) }}" class="btn btn-success">Produtos</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('fornecedor_cadastro') }}" class="btn btn-primary">Novo</a>
        </div>
        <div class="col-2"></div>
    </div>

    <script>
        function excluir(id){
            if(confirm(`Desaja realmente excluir o fornecedor  ${id}? Essa ação é irreversivel!`)){
                location.href = route('fornecedor_excluir', {'id':id});
            }
        }
    </script>
@endsection