@extends('cidade.layout')

@section('titulo', 'Detalhes da cidade')

@section('conteudo')
    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            <tr>
                <td>{{ $cidade['descricao'] }}</td>
                <td>{{ $cidade['estado_id'] }}</td>
            </tr>
        </tbody>
    </table>
@endsection