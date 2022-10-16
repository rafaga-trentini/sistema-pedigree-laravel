@extends('animal.layout')

@section('titulo', 'Detalhes do Usuario')

@section('conteudo')
    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            <tr>
                <td>{{ $animal['nome'] }}</td>
                <td>{{ $animal['chip'] }}</td>
                <td>{{ $animal['foto'] }}</td>
                <td>{{ $animal['pais_origem'] }}</td>
                <td>{{ $animal['data_nascimento'] }}</td>
                <td>{{ $animal['tipo'] }}</td>
                <td>{{ $animal['raca'] }}</td>
            </tr>
        </tbody>
    </table>
@endsection