@extends('tipo.layout')


@section('titulo', 'Editar tipo')

@section('conteudo')
    <form action="{{ route('tipo.update', $tipo['id']) }}" method="post">
        @method('PUT')
        @csrf
        @include('tipo.form')
    </form>
@endsection