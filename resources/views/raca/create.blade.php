@extends('raca.layout')

@section('titulo', 'Criar nova raca')

@section('conteudo')
    <form action="{{ route('raca.store')}}" method="post">
        @method("POST")
        @csrf
        @include('raca.form')
    </form>
@endsection