@extends('animal.layout')


@section('titulo', 'Editar animal')

@section('conteudo')
    <form action="{{ route('animal.update', $animal['id']) }}" method="post">
        @method('PUT')
        @csrf
        @include('animal.form')
    </form>
@endsection