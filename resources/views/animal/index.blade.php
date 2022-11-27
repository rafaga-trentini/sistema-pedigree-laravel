@extends('animal.layout')

@section('titulo', 'Listagem de animais')

@section('conteudo')
<<<<<<< HEAD
    <form action="{{ route('animal.index') }}" method="get">
        <div class="row">
            <div>
                <input clFass="form-control" type="text" name="filtro" id="filtro">
                <button class="btn btn-success" type="submit">Pesquisar</button>
            </div>
        </div>
    </form>
    <div class="card-footer">
        {{ $animals ->appends(array('filtro' => $filtro))->links() }}
    </div>
=======
    <!-- <form action="{{ route('animal.index') }}" method="get">
        @method("GET")
        <input type="text" id="filtro" name="filtro"></input>
        <input type="submit" value="Filtrar"></input>
    </form> -->
>>>>>>> 1ccdd1141b9ad2f9a7d19614779fbab132c547eb
    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            @foreach ($animals as $animal)
            
            <tr>
                <td>Nome: {{ $animal['nome'] }}</td>
                <td>Chip: {{ $animal['chip'] }}</td>
                <td>Foto: {{ $animal['foto'] }}</td>
                <td>Pais origem: {{ $animal['pais_origem'] }}</td>
                <td>Data nascimento: {{ $animal['data_nascimento'] }}</td>
                <td>Tipo: {{ $animal['tipo']->descricao }}</td>
                <td>Raca: {{ $animal['raca']->raca }}</td>
                <td>pai: @if (isset($animal['pai'])) {{ $animal['pai'] }} @endif</td> 
                <td>mae: @if (isset($animal['mae'])) {{ $animal['mae'] }} @endif</td>
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
    <div>
        {{ $animals->links() }}
    </div>
@endsection