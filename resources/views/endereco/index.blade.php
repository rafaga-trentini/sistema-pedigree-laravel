@extends('endereco.layout')

@section('titulo', 'Listagem de endereco')

@section('conteudo')
    <!-- <form action="{{ route('endereco.index') }}" method="get">
        @method("GET")
        <input type="text" id="filtro" name="filtro"></input>
        <input type="submit" value="Filtrar"></input>
    </form> -->
    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            @foreach ($enderecos as $endereco)
            
            <tr>
                <td>Endereco: {{ $endereco['endereco'] }}</td>
                <td>Numero: {{ $endereco['numero'] }}</td>
                <td>CEP: {{ $endereco['cep'] }}</td>
                <td>Complemento: {{ $endereco['complemento'] }}</td>
                <td>Bairro: {{ $endereco['bairro'] }}</td>
                <td>Usuario: {{ $endereco['usuario_id'] }}</td>
                <td>Cidade: {{ $endereco['cidade_id'] }}</td>
                <td><a href="{{ route('endereco.edit', $endereco['usuario_id']) }}">Edit</a></td>
                <td><a href="{{ route('endereco.destroy', $endereco['usuario_id']) }}">Show</a></td>
                <td>
                    <form action="{{ route('endereco.destroy', $endereco['usuario_id'])}}" method="post" onsubmit="return confirm('Tem certeza que quer excluir?')">
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