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
            <h1 class="h3 mb-0 text-gray-800">Oficina</h1>
            
          </div>

          <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->
          <div class='container'>
          <form action="index.php" method="post">
    <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">  Oficina</label>
                <input type="text" id="nome" name="nome" style="width: 10em" value="">

            </div>
        </br>
                    </fieldset>
       
           <fieldset> 
        <div class="campo">
            <label for="hora"> Hora</label>
            <input type="text" id="hora" name="hora" style="width: 20em" value="">
        </div>
        <div class="campo">
            <label for="tema"> Tema da Oficina</label>
            <input type="text" id="tema" name="tema" style="width: 10em" value="">
        </div>
</fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="cidade">Cidade</label>
                <input type="text" id="cidade" name="cidade" style="width: 10em" value="">
            </div>
        </fieldset>
        <button type="submit" name="submit">Enviar</button>
    </fieldset>
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