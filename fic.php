<?php
// Start the session
session_start();
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
        <h1 class="h3 mb-0 text-gray-800">
        </h1>
      </div>

      <style>

        h11 {
          color:red;
        }
        #logo {
          width:50%;
          height:50%;
        }
        .panel-heading{
          font-size:150%;
        }
      </style>

      <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->

                  <?php 
  //ESSA VERIFICAÇAO DO IF TEM QUE SER FEITA COM OS DADOS DO BANCO
                   print_r($_SESSION);

                  if ($_SESSION['email'] == "admin@admin.com" && $_SESSION['password'] == "1234") {
                      include "fic_adm.php";
                    } else {
                      include "fic_usuario.php";
                    }
                  ?>

                  <!-- FIM PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->

                </div>
                <!-- /.container-fluid -->

              </div></div>
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