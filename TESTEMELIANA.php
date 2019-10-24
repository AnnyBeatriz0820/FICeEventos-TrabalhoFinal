
<form method="POST" action="Registro1.php">
		<div class="form-group">
			<label for="name">Nome Completo:</label>
			<input type="text" class="form-control" name="NomeCompleto" placeholder="Digite seu nome" required>
			<label for="email">email</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text" name="Email">@</span>
				</div>
				<input type="text" class="form-control" name="Email" placeholder="E-mail" aria-describedby="email">
			</div>
		</div>
	</div>

	<div class="form-group">
		<label for="sex" name="gender">Sexo:</label>
		<div class="form-check form-check-inline">
			<input class="form-check-input" name="gender" type="radio" value="Masculino" selected>
			<label class="form-check-label">Masculino</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" name="gender" type="radio" value="Feminino">
			<label class="form-check-label">Feminino</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" name="gender" type="radio" value="Outros" disabled>
			<label class="form-check-label">Outros</label>
		</div>

	</div>		

	<div class="row">
		<div class="col">
			<label for="name">Telefone:</label>
		</div>
		<div class="col">
			<label for="name">Data Nasc.:</label>
		</div>
		<div class="col">
			<label for="name">Salário:</label>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<input type="text" class="form-control" name="Telefone" placeholder="8898888888">
		</div>
		<div class="col">
			<input type="text" class="form-control" name="Data" placeholder="12/12/2012">
		</div>
		<div class="col">
			<input type="text" class="form-control" name="Salario" placeholder="1200,00">
		</div>
	</div>

	<div class="row">
		<div class="col">
			<label for="name">Endereço:</label>
		</div>
		<div class="col">
			<label for="name">Cidade:</label>
		</div>
		<div class="col">
			<label for="name">Estado:</label>
		</div>
		<div class="col">
			<label for="name">Bairro:</label>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<input type="text" class="form-control" name="Endereço" placeholder="Rua Central">
		</div>
		<div class="col">
			<input type="text" class="form-control" name="Cidade" placeholder="Acopiara">
		</div>
		<div class="col">
			<select name="EstadosBrasil" class="custom-select">
				<option value="Alagoas">AL</option>
				<option value="Amapá">AP</option>
				<option value="Amazonas">AM</option>
				<option value="Bahia">BA</option>
				<option value="Ceará" selected>CE</option>
				<option value="Distrito Federal">DF</option>
				<option value="Espírito Santo">ES</option>
				<option value="Goiás">GO</option>
				<option value="Maranhão">MA</option>
				<option value="Mato Grosso">MT</option>
				<option value="Mato Grosso do Sul">MS</option>
				<option value="Minas Gerais">MG</option>
				<option value="Pará">PA</option>
				<option value="Paraíba">PB</option>
				<option value="Paraná">PR</option>
				<option value="Pernambuco">PE</option>
				<option value="Piauí">PI</option>
				<option value="Rio de Janeiro">RJ</option>
				<option value="Rio Grande do Norte">RN</option>
				<option value="Rio Grande do Sul">RS</option>
				<option value="Rondônia">RO</option>
				<option value="Roraima">RR</option>
				<option value="Santa Catarina">SC</option>
				<option value="São Paulo">SP</option>
				<option value="Sergipe">SE</option>
				<option value="Tocantins">TO</option>
			</select>
		</div>
		<div class="col">
			<input type="text" class="form-control" name="Bairro" placeholder="Centro">
		</div>
	</div>

	<div class="row">
		<div class="col">
			<label for="name">Tipo Sang.:</label>
		</div>
		<div class="col">
			<label for="name">Etnia:</label>
		</div>
		<div class="col">
			<label for="name">Peso:</label>
		</div>
		<div class="col">
			<label for="name">Altura:</label>
		</div>
	</div>

	
		

<br>
	<button type="submit" class="btn btn-primary">Cadastro</button>

</form>



                       
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

<!-- Latest compiled Java -->
<src="./bootstrap/js/bootstrap.min.js"></>

<src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></>
</body>
</html>
