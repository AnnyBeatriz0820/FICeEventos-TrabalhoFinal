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

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Congresso</h1>
            
          </div>

          <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->
          <?php 
  //ESSA VERIFICAÇAO DO IF TEM QUE SER FEITA COM OS DADOS DO BANCO
  if ($_SESSION['email'] == "admin@admin.com" && $_SESSION['password'] == "1234") {
    include "congresso_adm.php";
  } else {
    include "congresso_usuario.php";
  }
?>

                  if ($_SESSION['email'] == "admin@admin.com" && $_SESSION['password'] == "1234") {
                      include "congresso_adm.php";
                    } else {
                      include "congresso_usuario.php";
                    }
                  ?>

          </div>
        <!-- /.container-fluid -->

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