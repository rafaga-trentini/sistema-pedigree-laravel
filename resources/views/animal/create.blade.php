@extends('animal.layout')

@section('titulo', 'Criar novo animal')

@section('conteudo')
    <form action="{{ route('animal.store')}}" method="post">
        @method("POST")
        @csrf
        @include('animal.form')
    </form>
@endsection