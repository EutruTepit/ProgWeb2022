@extends('template')

@section('titulo')
    Cliente Novo 
@endsection

@section('conteudo')
<div class="row pt-4">
    <h1 class="text-center">
        Novo Cliente
    </h1>
</div>

<div class="row mt-5">
    <div class="col-3"></div>
    <div class="col-6">
        <form action="{{ route('clientes_novo') }}" method="post">
            @csrf
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control"><br>

            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control"><br>

            <label for="renda" class="form-label">Renda</label>
            <input type="text" name="renda" id="renda" class="form-control"><br>

            <p class="text-center">
                <a href="{{ route('clientes_listar') }}" class="btn btn-primary">Listar</a>
                <input type="submit" value="Enviar" class="btn btn-primary">
            </p>
        </form>
    </div>
    <div class="col-3"></div>
</div>
@endsection