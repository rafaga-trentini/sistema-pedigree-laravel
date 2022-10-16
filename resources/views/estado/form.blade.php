<label for="sigla">Sigla</label>
<input type="text" value="@if (isset($estado['sigla'])) {{ $estado['sigla'] }} @endif" id="sigla" name="sigla"></input>
<label for="descricao">Descricao</label>
<input type="text" value="@if (isset($estado['descricao'])) {{ $estado['descricao'] }} @endif" id="descricao" name="descricao"></input>
<input type="submit" value="Enviar"></input>