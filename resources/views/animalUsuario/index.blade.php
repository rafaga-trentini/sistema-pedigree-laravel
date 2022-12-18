@extends('animalUsuario.layout')

@section('titulo', 'Listagem de animal Usuario')

@section('conteudo')
    <form action="{{ route('animalUsuario.index') }}" method="get">
        <div class="row">
            <div>
                <input clFass="form-control" type="text" name="filtro" id="filtro">
                <button class="btn btn-success" type="submit">Pesquisar</button>
            </div>
        </div>
    </form>
    <div class="card-footer">
        {{ $animalsUsuario ->appends(array('filtro' => $filtro))->links() }}
    </div>
    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            @foreach ($animalsUsuario as $animalUsuario)
            
            <tr>
                <td>Nome: {{ $animalUsuario['data_aquisicao'] }}</td>
                <td>Chip: {{ $animalUsuario['data_venda'] }}</td>
                <td>Foto: {{ $animalUsuario['usuario_id'] }}</td>
                <td>Pais origem: {{ $animalUsuario['animal_id'] }}</td>
                <td><a href="{{ route('animalUsuario.edit', $animalUsuario['id']) }}">Edit</a></td>
                <td><a href="{{ route('animalUsuario.destroy', $animalUsuario['id']) }}">Show</a></td>
                <td>
                    <form action="{{ route('animalUsuario.destroy', $animalUsuario['id'])}}" method="post" onsubmit="return confirm('Tem certeza que quer excluir?')">
                        @method("DELETE")
                        @csrf
                        <input type="submit" value="Deletar"></input>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $animalsUsuario->links() }}
    </div>
@endsection