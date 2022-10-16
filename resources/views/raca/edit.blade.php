@extends('raca.layout')


@section('titulo', 'Editar raca')

@section('conteudo')
    <form action="{{ route('raca.update', $raca['id']) }}" method="post">
        @method('PUT')
        @csrf
        @include('raca.form')
    </form>
@endsection