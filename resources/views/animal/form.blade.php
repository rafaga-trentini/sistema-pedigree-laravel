<label for="nome">Nome</label>
<input type="text" value="@if (isset($animal['nome'])) {{ $animal['nome'] }} @endif" id="nome" name="nome"></input>
<label for="chip">chip</label>
<input type="text" value="@if (isset($animal['chip'])) {{ $animal['chip'] }} @endif" id="chip" name="chip"></input>
<label for="foto">foto</label>
<input type="text" value="@if (isset($animal['foto'])) {{ $animal['foto'] }} @endif" id="foto" name="foto"></input>
<label for="paisOrigem">pais de origem</label>
<input type="text" value="@if (isset($animal['pais_origem'])) {{ $animal['pais_origem'] }} @endif" id="paisOrigem" name="paisOrigem"></input>
<label for="dataNascimento">data nascimento</label>
<input type="text" value="@if (isset($animal['data_nascimento'])) {{ $animal['data_nascimento'] }} @endif" id="dataNascimento" name="dataNascimento"></input>
<label for="tipo">tipo</label>
<input type="text" value="@if (isset($animal['tipo'])) {{ $animal['tipo'] }} @endif" id="tipo" name="tipo"></input>
<label for="raca">raca</label>
<input type="text" value="@if (isset($animal['raca'])) {{ $animal['raca'] }} @endif" id="raca" name="raca"></input>
<input type="submit" value="Enviar"></input>