<label for="descricao">Descricao</label>
<input type="text" value="@if (isset($cidade['descricao'])) {{ $cidade['descricao'] }} @endif" id="descricao" name="descricao"></input>
<label for="estado">ID estado</label>
<input type="text" value="@if (isset($cidade['estado_id'])) {{ $cidade['estado_id'] }} @endif" id="estado" name="estado"></input>
<input type="submit" value="Enviar"></input>