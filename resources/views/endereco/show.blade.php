@extends('endereco.layout')

@section('titulo', 'Detalhes do endereco')

@section('conteudo')
    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            <tr>
                <td>{{ $endereco['endereco'] }}</td>
                <td>{{ $endereco['numero'] }}</td>
                <td>{{ $endereco['cep'] }}</td>
                <td>{{ $endereco['complemento'] }}</td>
                <td>{{ $endereco['bairro'] }}</td>
                <td>{{ $endereco['usuario_id'] }}</td>
                <td>{{ $endereco['cidade_id'] }}</td>
            </tr>
        </tbody>
    </table>
@endsection