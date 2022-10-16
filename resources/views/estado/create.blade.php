@extends('estado.layout')

@section('titulo', 'Criar novo estado')

@section('conteudo')
    <form action="{{ route('estado.store')}}" method="post">
        @method("POST")
        @csrf
        @include('estado.form')
    </form>
@endsection