@extends('estado.layout')

@section('titulo', 'Listagem de estados')

@section('conteudo')
    <form action="{{ route('estado.index' }}" method="get">
        @method("GET")
        <input type="text" id="filtro" name="filtro"></input>
        <input type="submit" value="Filtrar"></input>
    </form>
    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            @foreach ($estados as $estado)
            
            <tr>
                <td>{{ $estado['sigla'] }}</td>
                <td>{{ $estado['descricao'] }}</td>
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
@endsection