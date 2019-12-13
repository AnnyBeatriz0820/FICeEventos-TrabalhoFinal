<html lang="pt-br">
  <head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <title>Modalt</title>
  </head>
  <body>
    <!-- Botão que irá abrir o modal -->
    <div class=text-right>
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#meuModal">?</button>
 </div>
    <!-- Modal -->
    <div id="meuModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
 
        <!-- Conteúdo do modal-->
        <div class="modal-content">
 
          <!-- Cabeçalho do modal -->
          <div class="modal-header">
            <h4 class="modal-title">Presisa alterar os dados nas tabelas de seu site?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
 
          <!-- Corpo do modal -->
          <div class="modal-body">
            <h2> SIGA AS INSTRUÇÕES ABAIXO:</h2>
            </br>
            1º Vá até a pagina tables.php e acrescente dados nas tabelas de forma manual.
              </br>
            2º Lembre de acresecentar condições, insert, funções e return de forma uteis para que os dados sejam apresentado de forma corretas.
            </br>
            3º Não esqueça de trocar a nomeclatura de sua tabela se nescessário. 
 
          <!-- Rodapé do modal-->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
 
        </div>
      </div>
    </div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


