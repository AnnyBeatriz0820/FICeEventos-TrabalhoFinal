<!DOCTYPE html>
<html lang='en'>

<?php include 'template/cabecalho.php' ?>
<?php include 'template/menu-lateral.php' ?>

<!-- Content Wrapper -->
<div id='content-wrapper' class='d-flex flex-column'>

	<!-- Main Content -->
	<div id='content'>

		<?php include 'template/menu-superior.php' ?>       

		<!-- Begin Page Content -->
		<div class='container-fluid'>

			<!-- Page Heading -->
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">Mini-Curso</h1>
				
			</div>

			<!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->

			<div class="container">
				<form class="form-horizontal" role="form" method="POST" action="index.php">

						<b>
							Nome Completo: <input type ="text" name="CadastroDeEstudante" />
						</b>
						<br><br>
						Sexo<br>
						<input type="radio" name="Sexo" value="Masculino" checked> Masculino
						
						<input type="radio" name="Sexo" value="feminino"> Feminino
						
						<input type="radio" name="Sexo" value="Outros"> Outros
						<br><br>
						
						Telefone: <input type ="tel" name="Telefone" />
						Data Nascimento: <input type ="date" name="DataNascimento" />
						<br> <br>
						E-mail: <input type ="text" name="E-mail" />
						Salario: <input type ="number" name="Salario" /><br> <br>
						Endereço: <input type ="text" name="Endereço" />
						Número: <input type ="number" name="Numero" /><br> <br>
						Cidade: <input type ="text" name="Cidade" />
						Estado: <select name="Estado">
							<option value="Alagoas">AL</option>
							<option value="Amapá">AP</option>
							<option value="Amazonas">AM</option>
							<option value="Bahia">BA</option>
							<option value="Ceará">CE</option>
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
						</select><br><br> 
						Bairro: <input type ="text" name="Bairro" />
						tipo sanguineo:<select name="tipoSanguineo">
							<option value="tipo">O+</option>
							<option value="tipo">O-</option>
							<option value="tipo">A+</option>
							<option value="tipo">A-</option>
							<option value="tipo">B+</option>
							<option value="tipo">B-</option>
							<option value="tipo">AB+</option>
							<option value="tipo">AB-</option>
						</select>

						Etnia:
						<select name="Etnia">
							<option value="Etnia">Branca</option>
							<option value="Etnia">Parda</option>
							<option value="Etnia">Negra</option>
							<option value="Etnia">Indígena</option>
							<option value="Etnia">Amarela</option>
						</select> <br><br>
						Peso:<input type="number" name ="Peso"/><br><br> 
						Altura:<input type="decimal" name="Altura"/> <br><br>

					</form>
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Register</button>
						</div>
					</div>
				</form>
			</div>
			
			
			
			

			<!-- FIM PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->

		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- End of Main Content -->

	<?php include 'template/rodape.php' ?>
	

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class='scroll-to-top rounded' href='#page-top'>
	<i class='fas fa-angle-up'></i>
</a>

<?php include 'template/logout.php' ?>

<?php include 'template/imports.php' ?>

</body>

</html>