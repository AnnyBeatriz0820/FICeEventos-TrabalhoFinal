
          <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->

          <div class='container'>
            <?php include 'Ajuda/ajuda_curso_usuario.php' ?>

          <form method="post" action="index.php">

<div class="form-group">
    
  <label class="col-md-12 control-label" for="selectbasic">Selecione o Curso<h11>*</h11></label>
  
  <div class="col-md-12">
    <select required id="Curso" name="Curso" class="form-control">
      <option value="Física">Educação Física</option>
      <option value="Filosofia">Filosofia</option>
      <option value="Física">Física</option>
      <option value="Geografia">Geografia</option>
      <option value="História">História</option>
      <option value="Informática">Informática</option>
      <option value="Inglês">Inglês</option>
      <option value="Inglês">Libras</option>
      <option value="Literatura">Literatura</option>
      <option value="Matemática">Matemática</option>
      <option value="Português">Português</option>
      <option value="Química">Química</option>
      <option value="Sociologia">Sociologia</option>
       <option value="SubINF">Sub Sequente de Informática</option>
    </select>
  </div>
  </div>
 
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-md-8">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Inscrever</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar Inscrição</button>
  </div>
</div>
</fieldset>

</form>


</div>
          <!-- FIM PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->
