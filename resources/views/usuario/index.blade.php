@extends('usuario.layout')

@section('titulo', 'Listagem de usuarios')

@section('conteudo')
<<<<<<< HEAD
    <form action="{{ route('usuario.index') }}" method="get">
        <div class="row">
            <div>
                <input clFass="form-control" type="text" name="filtro" id="filtro">
                <button class="btn btn-success" type="submit">Pesquisar</button>
            </div>
        </div>
    </form>
    <div class="card-footer">
        {{ $usuarios ->appends(array('filtro' => $filtro))->links() }}
    </div>
=======
    <!-- <form action="{{ route('usuario.index') }}" method="get">
        @method("GET")
        <input type="text" id="filtro" name="filtro"></input>
        <input type="submit" value="Filtrar"></input>
    </form> -->
>>>>>>> 1ccdd1141b9ad2f9a7d19614779fbab132c547eb
    <table class="table table-hover" style="margin-bottom: inherit">
        <tbody>
            @foreach ($usuarios as $usuario)
            
            <tr>
                <td>Nome: {{ $usuario['nome'] }}</td>
                <td>Usuario: {{ $usuario['username'] }}</td>
                <td>Senha: {{ $usuario['senha'] }}</td>
                <td>Canil: {{ $usuario['isCanil'] }}</td>
                <td><a href="{{ route('usuario.edit', $usuario['id']) }}">Edit</a></td>
                <td><a href="{{ route('usuario.destroy', $usuario['id']) }}">Show</a></td>
                <td>
                    <form action="{{ route('usuario.destroy', $usuario['id'])}}" method="post" onsubmit="return confirm('Tem certeza que quer excluir?')">
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
        {{ $usuarios->links() }}
    </div>
@endsection