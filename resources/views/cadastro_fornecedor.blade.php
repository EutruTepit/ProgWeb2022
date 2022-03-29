@extends('template')

@section('titulo')
    Cadastro de fornecedores
@endsection

@section('conteudo')
<div class="row pt-4">
    <h1 class="text-center">
        Novo Fornecedor
    </h1>
</div>

<div class="row mt-5">
    <div class="col-3"></div>
    <div class="col-6">
        <form action="{{ route('forncedores_novo') }}" method="post">
            @csrf
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control"><br>
    
            <label for="endereco" class="form-label">Endereco</label>
            <input type="text" name="endereco" id="endereco" class="form-control"><br>
    
            <label for="cep" class="form-label">Cep</label>
            <input type="text" name="cep" id="cep" class="form-control"><br>
            
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" name="cidade" id="cidade" class="form-control"><br>
            
            <label for="estado_id">Estado</label>
            <select class="form-select" name="estado_id" id="estado_id">
                @foreach ($estados as $estado)
                    <option value="{{ $estado->id }}">{{ $estado->nome }} - {{ $estado->abrev }}</option>
                @endforeach
            </select>

            <!-- text-center necessário para centralizar (não achei metodo melhor na doc) -->
            <p class="text-center">
                <a href="{{ route('fornecedor_listar') }}" class="btn btn-primary">Listar</a>
                <input type="submit" value="Enviar" class="btn btn-primary">
            </p>
        </form>
    </div>
    <div class="col-3"></div>
</div>

@endsection
