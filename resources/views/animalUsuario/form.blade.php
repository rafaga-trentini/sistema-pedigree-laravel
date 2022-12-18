<label for="data_aquisicao">data aquisicao</label>
<input type="text" value="@if (isset($animalUsuario['data_aquisicao'])) {{ $animalUsuario['data_aquisicao'] }} @endif" id="data_aquisicao" name="data_aquisicao"></input>
<label for="data_venda">data venda</label>
<input type="text" value="@if (isset($animalUsuario['data_venda'])) {{ $animalUsuario['data_venda'] }} @endif" id="data_venda" name="data_venda"></input>
<label for="usuario_id">usuario id</label>
<input type="text" value="@if (isset($animalUsuario['usuario_id'])) {{ $animalUsuario['usuario_id'] }} @endif" id="usuario_id" name="usuario_id"></input>
<label for="animal_id">animal id</label>
<input type="text" value="@if (isset($animalUsuario['animal_id'])) {{ $animalUsuario['animal_id'] }} @endif" id="animal_id" name="animal_id"></input>
<input type="submit" value="Enviar"></input>