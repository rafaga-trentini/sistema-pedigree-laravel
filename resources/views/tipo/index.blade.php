@extends('tipo.layout')

@section('titulo', 'Listagem de tipos')

@section('conteudo')
    <form action="{{ route('tipo.index' }}" method="get">
        @method("GET")
        <input type="text" id="filtro" name="filtro"></input>
        <input type="submit" value="Filtrar"></input>
    </form>
    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            @foreach ($tipos as $tipo)
            
            <tr>
                <td>{{ $tipo['descricao'] }}</td>
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
@endsection