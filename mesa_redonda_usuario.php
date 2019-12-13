 <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->
          <div class="container">
            <?php include 'Ajuda/ajuda_mesa_redonda_usuario.php' ?>
<form action="index.php" method="post">
 
<div class="col-md-12">
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
  
  <div class="col-md-12">
    <select required id="MesaRedonda" name="MesaRedonda" class="form-control">
      <option value="MesaRedondaEst">Mesa-Redonda sobre Educação</option>
      <option value="MesaRedondaBAI">Mesa-Redonda sobre Avaliação da Economia</option>
      <option value="MesaRedondaCGE">Mesa-Redonda Cearense de Gestão do Esporte</option>
      <option value="MesaRedondaC">Mesa-Redonda da Ciência</option>
      <option value="MesaRedondaS">Mesa-Redonda da Saúde</option>
      <option value="MesaRedondaA">Mesa-Redonda das Águas</option>
      <option value="MesaRedondaEd">Mesa-Redonda de Ètica</option>
      <option value="MesaRedondaTI">Mesa-Redonda de Técnologia</option>
      <option value="MesaRedondaZ">Mesa-Redonda de Pesquisa</option>
      <option value="MesaRedondaE">Mesa-Redonda do Esporte</option>
      <option value="MesaRedondaIACN">Mesa-Redonda da Política</option>
      <option value="MesaRedondaSM">Mesa-Redonda da Saúde Mental</option>
      <option value="MesaRedondaAP">Mesa-Redonda sobre Area da Pesca</option>
    </select>
  </div>
  </div>
  <div class="form-group">
  <label class="col-md-6 control-label" for="Nome">Formação Acedêmica<h11>*</h11></label>  
  <div class="col-md-8">
  <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text">
  </div>
</div>

 </fieldset>
<!-- Button (Double) -->

<div class="form-group">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-md-8">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Inscrever</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar Inscrição</button>
  </div>
</div>
</fieldset>

</div>

</form>
</div></div></div>
          <!-- FIM PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->

          