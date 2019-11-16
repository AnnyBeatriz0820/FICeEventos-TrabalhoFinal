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
            <h1 class="h3 mb-0 text-gray-800">Congresso
            </h1>
            
          </div>

          <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->
          <div class="container">
          <form method="post" action="index.php">
  <div class="form-row">
    <div class="Nome">
      <label for="validationServer01">Nome Completo:</label>
      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Nome Completo" value="Nome" required>
      <div class="valid-feedback">
      </div>
    </div>
    
  <div class="form-row">
    <div class="Cidade">
      <label for="validationServer03">Cidade:</label>
      <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Cidade" required>
      <div class="invalid-feedback">
       
      </div>
    </div>
    <div class="Estado">
      <label for="validationServer04">Estado:</label>
      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Estado" required>
      <div class="invalid-feedback">
      </div>
    </div>

    <div class="Evento">
      <label for="validationServer04">Iniciação científica:</label>
      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Evento" required>
      <div class="invalid-feedback">
      </div>
    </div>
    <div class="E-mail">
      <label for="validationServer05">E-mail / CPF:</label>
      <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="E-Mail" required>
      <div class="invalid-feedback">
     <div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
        Aceito os Termos.
      </label>
      <div class="invalid-feedback">
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Enviar Inscrição</button>
</form>
</div>
          <!-- FIM PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->

          </div></div></div></div></div>
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