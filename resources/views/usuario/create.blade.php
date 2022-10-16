@extends('usuario.layout')

@section('titulo', 'Criar novo usuario')

@section('conteudo')
    <form action="{{ route('usuario.store')}}" method="post">
        @method("POST")
        @csrf
        @include('usuario.form')
    </form>
@endsection