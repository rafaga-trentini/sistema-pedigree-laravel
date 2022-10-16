<label for="descricao">descricao</label>
<input type="text" value="@if (isset($contato['descricao'])) {{ $contato['descricao'] }} @endif" id="descricao" name="descricao"></input>
<input type="submit" value="Enviar"></input>