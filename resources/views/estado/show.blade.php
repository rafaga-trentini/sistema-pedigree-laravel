@extends('estado.layout')

@section('titulo', 'Detalhes do estado')

@section('conteudo')
    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            <tr>
                <td>{{ $estado['sigla'] }}</td>
                <td>{{ $estado['descricao'] }}</td>
            </tr>
        </tbody>
    </table>
@endsection