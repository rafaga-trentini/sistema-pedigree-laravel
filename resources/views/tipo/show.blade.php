@extends('tipo.layout')

@section('titulo', 'Detalhes do tipo')

@section('conteudo')
    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            <tr>
                <td>{{ $tipo['descricao'] }}</td>
            </tr>
        </tbody>
    </table>
@endsection