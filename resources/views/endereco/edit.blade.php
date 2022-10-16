@extends('endereco.layout')


@section('titulo', 'Editar endereco')

@section('conteudo')
    <form action="{{ route('endereco.update', $endereco['id']) }}" method="post">
        @method('PUT')
        @csrf
        @include('endereco.form')
    </form>
@endsection