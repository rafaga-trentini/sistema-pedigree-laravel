@extends('tipo.layout')

@section('titulo', 'Criar novo tipo')

@section('conteudo')
    <form action="{{ route('tipo.store')}}" method="post">
        @method("POST")
        @csrf
        @include('tipo.form')
    </form>
@endsection