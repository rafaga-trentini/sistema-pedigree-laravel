@extends('animalUsuario.layout')


@section('titulo', 'Editar animal Usuario')

@section('conteudo')
    <form action="{{ route('animalUsuario.update', $animalUsuario['data_aquisicao']) }}" method="post">
        @method('PUT')
        @csrf
        @include('animalUsuario.form')
    </form>
@endsection