@extends('usuario.layout')

@section('titulo', 'Detalhes do Usuario')

@section('conteudo')
    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            <tr>
                <td>{{ $usuario['nome'] }}</td>
                <td>{{ $usuario['username'] }}</td>
                <td>{{ $usuario['senha'] }}</td>
                <td>{{ $usuario['isCanil'] }}</td>
            </tr>
        </tbody>
    </table>
@endsection