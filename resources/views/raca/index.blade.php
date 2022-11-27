@extends('raca.layout')

@section('titulo', 'Listagem de racas')

@section('conteudo')
    <form action="{{ route('raca.index') }}" method="get">
        <div class="row">
            <div>
                <input clFass="form-control" type="text" name="filtro" id="filtro">
                <button class="btn btn-success" type="submit">Pesquisar</button>
            </div>
        </div>
    </form>
    <div class="card-footer">
        {{ $racas ->appends(array('filtro' => $filtro))->links() }}
    </div>

    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            @foreach ($racas as $raca)
            
            <tr>
                <td>Raca: {{ $raca['raca'] }}</td>
                <td>Sexo: {{ $raca['sexo'] }}</td>
                <td>Cor: {{ $raca['cor'] }}</td>
                <td><a href="{{ route('raca.edit', $raca['id']) }}">Edit</a></td>
                <td><a href="{{ route('raca.destroy', $raca['id']) }}">Show</a></td>
                <td>
                    <form action="{{ route('raca.destroy', $raca['id'])}}" method="post" onsubmit="return confirm('Tem certeza que quer excluir?')">
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
        {{ $racas->links() }}
    </div>
@endsection