@extends('tipo.layout')

@section('titulo', 'Listagem de tipos')

@section('conteudo')
    <form action="{{ route('tipo.index') }}" method="get">
        <div class="row">
            <div>
                <input clFass="form-control" type="text" name="filtro" id="filtro">
                <button class="btn btn-success" type="submit">Pesquisar</button>
            </div>
        </div>
    </form>
    <div class="card-footer">
        {{ $tipos ->appends(array('filtro' => $filtro))->links() }}
    </div>

    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            @foreach ($tipos as $tipo)
            
            <tr>
                <td>Tipo: {{ $tipo['descricao'] }}</td>
                <td><a href="{{ route('tipo.edit', $tipo['id']) }}">Edit</a></td>
                <td><a href="{{ route('tipo.destroy', $tipo['id']) }}">Show</a></td>
                <td>
                    <form action="{{ route('tipo.destroy', $tipo['id'])}}" method="post" onsubmit="return confirm('Tem certeza que quer excluir?')">
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
        {{ $tipos->links() }}
    </div>
@endsection