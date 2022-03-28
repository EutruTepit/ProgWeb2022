@extends('template')

@section('titulo')
Cadastro Produto    
@endsection

@section('conteudo')
    <div class="row pt-4">
        <h1 class="text-center">
            Novo Produto
        </h1>
    </div>
    
    <div class="row mt-5">
        <div class="col-3"></div>
        <div class="col-6">
            <form action="{{ route('produtos_novo') }}" method="post">
                @csrf
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control"><br>
        
                <label for="categoria" class="form-label">Categoria</label>
                <input type="text" name="categoria" id="categoria" class="form-control"><br>
        
                <label for="preco" class="form-label">Preço (R$)</label>
                <input type="text" name="preco" id="preco" class="form-control"><br>
        
                <!-- text-center necessário para centralizar (não achei metodo melhor na doc) -->
                <p class="text-center">
                    <a href="{{ route('produto_listar') }}" class="btn btn-primary">Listar</a>
                    <input type="submit" value="Enviar" class="btn btn-primary">
                </p>
            </form>
        </div>
        <div class="col-3"></div>
    </div>

@endsection