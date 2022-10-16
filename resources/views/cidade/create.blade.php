@extends('cidade.layout')

@section('titulo', 'Criar nova cidade')

@section('conteudo')
    <form action="{{ route('cidade.store')}}" method="post">
        @method("POST")
        @csrf
        @include('cidade.form')
    </form>
@endsection