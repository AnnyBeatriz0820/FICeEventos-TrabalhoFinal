
          <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->

          <div class='container'>
          <form method="post" action="index.php">

  <label class="col-md-12 control-label" for="selectbasic">Selecione a Cidade que Quer Participar <h11>*</h11></label>
  
  <div class="col-md-6">
                  <div class="form-label-group">
                    <label for="cep">Campus</label>
                      <select class="form-control" id="uf" name="uf">
                      <option value="0">Campus</option>
                    <?php
                    include 'template/conn.php';
                    $select = "SELECT * FROM campus";

                    $resultado 	= $conn->query($select);


                    if ($resultado->num_rows > 0) {
                      while($linha = $resultado->fetch_assoc()) {
                        $nome = $linha['nome'];
                        $sigla = $linha['sigla'];
                        $id = $linha['id'];?>

                        <option value="<?php echo $sigla; ?>"><?php echo $nome; ?></option>
                        <?php	
                      }
                    }
                    ?>
                    </select>
                  </div>
                </div>
<div class="form-group">
    
  <label class="col-md-6 control-label" for="selectbasic">Escolher Tema<h11>*</h11></label>
  
  <div class="col-md-6">
    <select required id="Debate" name="Debate" class="form-control">
      <option value="DebateEst">Debate sobre Educação</option>
      <option value="DebateBAI">Debate sobre Avaliação da Economia</option>
      <option value="DebateCGE">Debate Cearense de Gestão do Esporte</option>
      <option value="DebateC">Debate da Ciência</option>
      <option value="DebateS">Debate da Saúde</option>
      <option value="DebateA">Debate das Águas</option>
      <option value="DebateEd">Debate de Ètica</option>
      <option value="DebateTI">Debate de Técnologia</option>
      <option value="DebateZ">Debate de Pesquisa</option>
      <option value="DebateE">Debate do Esporte</option>
      <option value="DebateIACN">Debate da Política</option>
      <option value="DebateSM">Debate da Saúde Mental</option>
      <option value="DebateAP">Debate sobre Area da Pesca</option>
    </select>
  </div>
  </div>
  <div class="form-group">
  <label class="col-md-6 control-label" for="Nome">Formação Acadêmica<h11>*</h11></label>  
  <div class="col-md-8">
  <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text">
  </div>
</div>
 <fieldset>
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
          <!-- FIM PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->

          </div>
 