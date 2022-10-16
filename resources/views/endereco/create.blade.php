@extends('endereco.layout')

@section('titulo', 'Criar novo endereco')

@section('conteudo')
    <form action="{{ route('endereco.store')}}" method="post">
        @method("POST")
        @csrf
        @include('endereco.form')
    </form>
@endsection