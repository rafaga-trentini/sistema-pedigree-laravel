@extends('usuario.layout')


@section('titulo', 'Editar usuario')

@section('conteudo')
    <form action="{{ route('usuario.update', $usuario['id']) }}" method="post">
        @method('PUT')
        @csrf
        @include('usuario.form')
    </form>
@endsection