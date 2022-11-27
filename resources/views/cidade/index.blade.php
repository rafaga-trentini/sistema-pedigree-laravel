@extends('cidade.layout')

@section('titulo', 'Listagem de cidades')

@section('conteudo')
<<<<<<< HEAD

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

=======
    <!-- <form action="{{ route('cidade.index') }}" method="get">
        @method("GET")
        <input type="text" id="filtro" name="filtro"></input>
        <input type="submit" value="Filtrar"></input>
    </form> -->
>>>>>>> 1ccdd1141b9ad2f9a7d19614779fbab132c547eb
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