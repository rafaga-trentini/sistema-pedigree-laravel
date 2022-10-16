@extends('estado.layout')


@section('titulo', 'Editar usuario')

@section('conteudo')
    <form action="{{ route('estado.update', $estado['id']) }}" method="post">
        @method('PUT')
        @csrf
        @include('estado.form')
    </form>
@endsection