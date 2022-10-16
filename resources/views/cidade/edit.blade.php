@extends('cidade.layout')


@section('titulo', 'Editar cidade')

@section('conteudo')
    <form action="{{ route('cidade.update', $cidade['id']) }}" method="post">
        @method('PUT')
        @csrf
        @include('cidade.form')
    </form>
@endsection