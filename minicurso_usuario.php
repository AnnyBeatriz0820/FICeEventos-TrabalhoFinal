<div class="container">

          <form method="post" action="index.php">

<div class="form-group">

  <div class="col-md-12">
                  <div class="form-label-group">
                    <label for="cep">Escolaridade</label>
                      <select class="form-control" id="uf" name="uf">
                      <option value="0">Escolaridade</option>
                    <?php
                    include 'template/conn.php';
                    $select = "SELECT * FROM escolaridade";

                    $resultado 	= $conn->query($select);


                    if ($resultado->num_rows > 0) {
                      while($linha = $resultado->fetch_assoc()) {
                        $nome = $linha['nome'];
                        $id = $linha['id'];?>

                        <option value="<?php echo $id; ?>"><?php echo $nome; ?></option>
                        <?php	
                      }
                    }
                    ?>
                    </select>
                  </div>
                </div>
 
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-md-8">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Inscrever</button>
        <p></p>

    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar Inscrição</button>
  </div>
</div>
</fieldset>
</form>       
</div></div>
          
