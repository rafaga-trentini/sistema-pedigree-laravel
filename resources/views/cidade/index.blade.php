@extends('cidade.layout')

@section('titulo', 'Listagem de cidades')

@section('conteudo')
    <form action="{{ route('cidade.index' }}" method="get">
        @method("GET")
        <input type="text" id="filtro" name="filtro"></input>
        <input type="submit" value="Filtrar"></input>
    </form>
    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            @foreach ($cidades as $cidade)
            
            <tr>
                <td>{{ $cidade['descricao'] }}</td>
                <td>{{ $cidade['estado_id'] }}</td>
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
@endsection