@extends('animalUsuario.layout')

@section('titulo', 'Criar novo animal usuario')

@section('conteudo')
    <form action="{{ route('animalUsuario.store')}}" method="post">
        @method("POST")
        @csrf
        @include('animalUsuario.form')
    </form>
@endsection