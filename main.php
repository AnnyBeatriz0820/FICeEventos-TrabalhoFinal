<?php
// Start the session
session_start();
?>

<?php 
  //ESSA VERIFICAÇAO DO IF TEM QUE SER FEITA COM OS DADOS DO BANCO
  if ($_POST[email] == "admin@admin.com" && $_POST[password] == "1234") {
    echo "Admin-";
    $_SESSION['email'] 	= $_POST[email];
    $_SESSION['password'] = $_POST[password];
  if ($_POST['email'] == "admin@admin.com" && $_POST['password'] == "1234") {
    $_SESSION['email'] 	= $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    print_r($_SESSION);

  } else {
    echo "User-";
    $_SESSION['email'] 	= $_POST[email];
    $_SESSION['password'] = $_POST[password];
    $_SESSION['email'] 	= $_POST['email'];
    $_SESSION['password'] 	= $_POST['password'];
    print_r($_SESSION);
  }

?>
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
            <h1 class="h3 mb-0 text-gray-800">Eventos e Fic</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Gerar Relatório</a>
          </div>

          <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->
        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseUtilitie' aria-expanded='true' aria-controls='collapseUtilitie'>
          <i class='fas fa-fw fa-folder'></i>
         
          <span>Ações Usuários</span>
        </a>
        <div id='collapseUtilitie' class='collapse' aria-labelledby='headingUtilities' data-parent='#accordionSidebar'>
          <div class='bg-white py-2 collapse-inner rounded'>
            <h6 class='collapse-header'>Eventos Disponíveis:</h6>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <a class='collapse-item' href='congresso.php'>Congresso</a>&nbsp &nbsp &nbsp &nbsp
            <a class='collapse-item' href='curso.php'>Curso</a>&nbsp &nbsp &nbsp &nbsp
            <a class='collapse-item' href='debate.php'>Debate</a>&nbsp &nbsp &nbsp &nbsp
            <a class='collapse-item' href='eventos.php'>Evento</a>&nbsp &nbsp &nbsp &nbsp
            <a class='collapse-item' href='extensao.php'>Extensão</a>&nbsp &nbsp &nbsp &nbsp
            <a class='collapse-item' href='fic.php'>FIC</a>&nbsp &nbsp &nbsp &nbsp
            <a class='collapse-item' href='ic.php'>Iniciação-Cientifica</a>&nbsp &nbsp &nbsp &nbsp
            <a class='collapse-item' href='mesaredonda.php'>Mesa Redonda</a>&nbsp &nbsp &nbsp &nbsp
            <a class='collapse-item' href='minicurso.php'>Mini-Curso</a>&nbsp &nbsp &nbsp &nbsp
            <a class='collapse-item' href='oficina.php'>Oficina</a>&nbsp &nbsp &nbsp &nbsp
            <a class='collapse-item' href='palestra.php'>Palestra</a>&nbsp &nbsp &nbsp &nbsp
            <a class='collapse-item' href='seminario.php'>Seminário</a>&nbsp &nbsp &nbsp &nbsp
            <a class='collapse-item' href='workshop.php'>Workshop</a>&nbsp &nbsp &nbsp &nbsp
          </div>
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