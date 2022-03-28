@extends('template')

@section('titulo')
    Lista de Clientes
@endsection

@section('conteudo')
    @foreach ($'clientes as $c )
    <div>
        Nome:{{ $c->nome }} - Telefone: {{ $c->telefone }} - Renda: {{ $c->renda }} 
    </div>
    @endforeach
@endsection