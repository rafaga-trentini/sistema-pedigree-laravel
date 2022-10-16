@extends('animal.layout')

@section('titulo', 'Listagem de animais')

@section('conteudo')
    <form action="{{ route('animal.index' }}" method="get">
        @method("GET")
        <input type="text" id="filtro" name="filtro"></input>
        <input type="submit" value="Filtrar"></input>
    </form>
    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            @foreach ($animals as $animal)
            
            <tr>
                <td>{{ $animal['nome'] }}</td>
                <td>{{ $animal['chip'] }}</td>
                <td>{{ $animal['foto'] }}</td>
                <td>{{ $animal['pais_origem'] }}</td>
                <td>{{ $animal['data_nascimento'] }}</td>
                <td>{{ $animal['tipo'] }}</td>
                <td>{{ $animal['raca'] }}</td>
                <td><a href="{{ route('animal.edit', $animal['id']) }}">Edit</a></td>
                <td><a href="{{ route('animal.destroy', $animal['id']) }}">Show</a></td>
                <td>
                    <form action="{{ route('animal.destroy', $animal['id'])}}" method="post" onsubmit="return confirm('Tem certeza que quer excluir?')">
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