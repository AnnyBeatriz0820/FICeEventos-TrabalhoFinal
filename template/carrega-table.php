<thead>
  <tr>
    <th>id</th>
    <th>Nome</th>
    <th>E-mail</th>
    <th>CPF</th>
    
    
    <th>Ação</th>
  </tr>
</thead>
<tfoot>
  <tr>
    <th>id</th>
    <th>Nome</th>
    <th>E-mail</th>
    <th>CPF</th>
   
    
    <th>Ação</th>
  </tr>
</tfoot>
<tbody>

  <?php 


  include 'conn.php';


  $sql = "SELECT * FROM usuario ";

  $resultado = $conn->query($sql);

  if ($resultado->num_rows > 0) {
    while($linha = $resultado->fetch_assoc()) {

      $id             = $linha["id"];
      $nome           = $linha["nome"];
      $e_mail          = $linha["e_mail"];
      $cpf            = $linha["cpf"];
        ?>
        <tr>
          <td><?php echo $id; ?></td>
          <td><?php echo $nome; ?></td>
          <td><?php echo $e_mail; ?></td>
          <td><?php echo $cpf; ?></td>
          
          <td>
            <a class="text-danger" href="delete.php?id=<?php echo $id; ?>">
              <i class="material-icons">
                delete
              </i>
            </a>

          </td>
        </tr>

        <?php  
    }
  } else {  ?>
    <tr >
      <td colspan=6 align="center">Sem Registros no Banco ou select ERRADO!!!</td>
    </tr>

  <?php  }
      ?>

    </tbody>

