<label for="nome">Nome</label>
<input type="text" value="@if (isset($animal['nome'])) {{ $animal['nome'] }} @endif" id="nome" name="nome"></input>
<label for="chip">chip</label>
<input type="text" value="@if (isset($animal['chip'])) {{ $animal['chip'] }} @endif" id="chip" name="chip"></input>
<label for="foto">foto</label>
<input type="text" value="@if (isset($animal['foto'])) {{ $animal['foto'] }} @endif" id="foto" name="foto"></input>
<label for="pais_origem">pais de origem</label>
<input type="text" value="@if (isset($animal['pais_origem'])) {{ $animal['pais_origem'] }} @endif" id="pais_origem" name="pais_origem"></input>
<label for="data_nascimento">data nascimento</label>
<input type="text" value="@if (isset($animal['data_nascimento'])) {{ $animal['data_nascimento'] }} @endif" id="data_nascimento" name="data_nascimento"></input>
<label for="tipo_id">tipo</label>
<input type="text" value="@if (isset($animal['tipo_id'])) {{ $animal['tipo_id'] }} @endif" id="tipo_id" name="tipo_id"></input>
<label for="raca_id">raca</label>
<input type="text" value="@if (isset($animal['raca_id'])) {{ $animal['raca_id'] }} @endif" id="raca_id" name="raca_id"></input>
<label for="pai">animal pai</label>
<input type="text" value="@if (isset($animal['pai'])) {{ $animal['pai'] }} @endif" id="pai" name="pai"></input>
<label for="mae">animal mae</label>
<input type="text" value="@if (isset($animal['mae'])) {{ $animal['mae'] }} @endif" id="mae" name="mae"></input>
<input type="submit" value="Enviar"></input>