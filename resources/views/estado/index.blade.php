@extends('estado.layout')

@section('titulo', 'Listagem de estados')

@section('conteudo')
    <form action="{{ route('estado.index') }}" method="get">
        <div class="row">
            <div>
                <input clFass="form-control" type="text" name="filtro" id="filtro">
                <button class="btn btn-success" type="submit">Pesquisar</button>
            </div>
        </div>
    </form>
    <div class="card-footer">
        {{ $estados ->appends(array('filtro' => $filtro))->links() }}
    </div>
    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            @foreach ($estados as $estado)
            
            <tr>
                <td>Sigla: {{ $estado['sigla'] }}</td>
                <td>Estado: {{ $estado['descricao'] }}</td>
                <td><a href="{{ route('estado.edit', $estado['id']) }}">Edit</a></td>
                <td><a href="{{ route('estado.destroy', $estado['id']) }}">Show</a></td>
                <td>
                    <form action="{{ route('estado.destroy', $estado['id'])}}" method="post" onsubmit="return confirm('Tem certeza que quer excluir?')">
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
        {{ $estados->links() }}
    </div>
@endsection