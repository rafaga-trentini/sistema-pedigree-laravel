@extends('cidade.layout')

@section('titulo', 'Listagem de cidades')

@section('conteudo')
    <form action="{{ route('cidade.index') }}" method="get">
        <div class="row">
            <div>
                <input clFass="form-control" type="text" name="filtro" id="filtro">
                <button class="btn btn-success" type="submit">Pesquisar</button>
            </div>
        </div>
    </form>
    <div class="card-footer">
        {{ $cidades ->appends(array('filtro' => $filtro))->links() }}
    </div>
    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            @foreach ($cidades as $cidade)
            
            <tr>
                <td>Cidade: {{ $cidade['descricao'] }}</td>
                <td>Estado: {{ $cidade['estado_id'] }}</td>
                <td><a href="{{ route('cidade.edit', $cidade['id']) }}">Edit</a></td>
                <td><a href="{{ route('cidade.destroy', $cidade['id']) }}">Show</a></td>
                <td>
                    <form action="{{ route('cidade.destroy', $cidade['id'])}}" method="post" onsubmit="return confirm('Tem certeza que quer excluir?')">
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
        {{ $cidades->links() }}
    </div>
    
@endsection