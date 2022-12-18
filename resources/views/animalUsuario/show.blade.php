@extends('animalUsuario.layout')

@section('titulo', 'Detalhes do animal Usuario')

@section('conteudo')
    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            <tr>
                <td>{{ $animalUsuario['data_aquisicao'] }}</td>
                <td>{{ $animalUsuario['data_venda'] }}</td>
                <td>{{ $animalUsuario['usuario_id'] }}</td>
                <td>{{ $animalUsuario['animal_id'] }}</td>

            </tr>
        </tbody>
    </table>
@endsection