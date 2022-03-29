@extends('template')

@section('titulo')
    Editar Fornecedor
@endsection

@section('conteudo')
<div class="row pt-4">
    <h1 class="text-center">
        Editar Fornecedor {{ $fornecedor->nome }}
    </h1>
</div>

<div class="row mt-5">
    <div class="col-3"></div>
    <div class="col-6">
        <form action="{{ route('fornecedores_editar') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $fornecedor->id }}">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $fornecedor->nome }}"><br>
    
            <label for="endereco" class="form-label">Endereco</label>
            <input type="text" name="endereco" id="endereco" class="form-control" value="{{ $fornecedor->endereco }}"><br>
    
            <label for="cep" class="form-label">Cep</label>
            <input type="text" name="cep" id="cep" class="form-control" value="{{ $fornecedor->cep }}"><br>
            
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" name="cidade" id="cidade" class="form-control" value="{{ $fornecedor->cidade }}"><br>
            
            <label for="estado_id">Estado</label>
            <select class="form-select" name="estado_id" id="estado_id">
                @foreach ($estados as $estado)
                    <option value="{{ $estado->id }}" {{ $estado->id == $fornecedor->estado_id ? 'selected' : '' }}>{{ $estado->nome }} - {{ $estado->abrev }}</option>
                @endforeach
            </select>

            <!-- text-center necessário para centralizar (não achei metodo melhor na doc) -->
            <p class="text-center pt-md-2">
                <a href="{{ route('fornecedor_listar') }}" class="btn btn-primary">Voltar</a>
                <input type="submit" value="Enviar" class="btn btn-primary">
            </p>
        </form>
    </div>
    <div class="col-3"></div>
</div>

@endsection
