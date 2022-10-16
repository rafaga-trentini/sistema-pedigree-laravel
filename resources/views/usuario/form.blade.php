<label for="nome">Nome completo</label>
<input type="text" value="@if (isset($usuario['nome'])) {{ $usuario['nome'] }} @endif" id="nome" name="nome"></input>
<label for="usernme">usernme</label>
<input type="text" value="@if (isset($usuario['usernme'])) {{ $usuario['usernme'] }} @endif" id="usernme" name="usernme"></input>
<label for="senha">senha</label>
<input type="text" value="@if (isset($usuario['senha'])) {{ $usuario['senha'] }} @endif" id="senha" name="senha"></input>
<label for="isCanil">isCanil</label>
<input type="boolean" value="@if (isset($usuario['isCanil'])) {{ $usuario['isCanil'] }} @endif" id="isCanil" name="isCanil"></input>
<input type="submit" value="Enviar"></input>