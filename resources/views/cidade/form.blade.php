<label for="descricao">Descricao</label>
<input type="text" value="@if (isset($cidade['descricao'])) {{ $cidade['descricao'] }} @endif" id="descricao" name="descricao"></input>
<label for="estado_id">ID estado</label>
<input type="text" value="@if (isset($cidade['estado_id'])) {{ $cidade['estado_id'] }} @endif" id="estado_id" name="estado_id"></input>
<input type="submit" value="Enviar"></input>