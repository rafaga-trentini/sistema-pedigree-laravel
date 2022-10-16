<label for="raca">raca</label>
<input type="text" value="@if (isset($contato['raca'])) {{ $contato['raca'] }} @endif" id="raca" name="raca"></input>
<label for="sexo">sexo</label>
<input type="text" value="@if (isset($contato['sexo'])) {{ $contato['sexo'] }} @endif" id="sexo" name="sexo"></input>
<label for="cor">cor</label>
<input type="text" value="@if (isset($contato['cor'])) {{ $contato['cor'] }} @endif" id="cor" name="cor"></input>
<input type="submit" value="Enviar"></input>