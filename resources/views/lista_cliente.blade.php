@extends('template')

@section('titulo')
    Lista de Clientes
@endsection

@section('conteudo')
@routes
    <table class="table">
        <thead>
            <th scope="col">#id</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Renda</th>  
            <th scope="col">Operações</th>
        </thead>

        <tbody>
            @foreach ($clientes as $c )
                <tr>
                    <td> {{ $c->id }} </td>
                    <td> {{ $c->nome }} </td>
                    <td> {{ $c->telefone }} </td>
                    <td> {{ $c->renda }} </td>
                    <td> 
                        <a href="{{ route('cliente_alterar', ['id' => $c->id]) }}" class="btn btn-warning">Alterar</a>
                        <a href="#" onclick="excluir({{ $c->id }})" class="btn btn-danger">Exluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('cliente_cadastro') }}" class="btn btn-primary">Novo</a>

    <script>
        function excluir(id){
            if(confirm(`Desaja realmente excluir o cliente  ${id}? Essa ação é irreversivel!`)){
                location.href = route('cliente_excluir', {'id':id});
            }
        }
    </script>
@endsection
