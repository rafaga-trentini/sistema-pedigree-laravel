<label for="endereco">endereco</label>
<input type="text" value="@if (isset($endereco['endereco'])) {{ $endereco['endereco'] }} @endif" id="endereco" name="endereco"></input>
<label for="bairro">bairro</label>
<input type="text" value="@if (isset($endereco['bairro'])) {{ $endereco['bairro'] }} @endif" id="bairro" name="bairro"></input>
<label for="complemento">complemento</label>
<input type="text" value="@if (isset($endereco['complemento'])) {{ $endereco['complemento'] }} @endif" id="complemento" name="complemento"></input>
<label for="numero">numero</label>
<input type="text" value="@if (isset($endereco['numero'])) {{ $endereco['numero'] }} @endif" id="numero" name="numero"></input>
<label for="cep">cep</label>
<input type="text" value="@if (isset($endereco['cep'])) {{ $endereco['cep'] }} @endif" id="cep" name="cep"></input>
<label for="usuario_id">ID usuario</label>
<input type="text" value="@if (isset($endereco['usuario_id'])) {{ $endereco['usuario_id'] }} @endif" id="usuario_id" name="usuario_id"></input>
<label for="cidade_id">ID cidade</label>
<input type="text" value="@if (isset($endereco['cidade_id'])) {{ $endereco['cidade_id'] }} @endif" id="cidade_id" name="cidade_id"></input>

<input type="submit" value="Enviar"></input>