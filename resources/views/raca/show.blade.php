@extends('raca.layout')

@section('titulo', 'Detalhes da raca')

@section('conteudo')
    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            <tr>
                <td>{{ $raca['raca'] }}</td>
                <td>{{ $raca['sexo'] }}</td>
                <td>{{ $raca['cor'] }}</td>
            </tr>
        </tbody>
    </table>
@endsection