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
            <h1 class="h3 mb-0 text-gray-800"></h1>
            
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
<<<<<<< HEAD
<!--<?php
if($login == "aluno"){
  include 'congressoAluno.php';
} elseif ($login == "admin") {
  include 'congressoAdm.php';
}
?>-->
<form class="form-horizontal">
  <div>
=======
          <div class='container'>
          <form method="post" action="index.php">
   <div>
>>>>>>> master
        <fieldset>
        
       <h1 STYLE="text-align:center;"> <IMG SRC="https://2.bp.blogspot.com/-QYgmjjRaouk/TkPusQrEGxI/AAAAAAAABIE/JlTLuECoQYc/s300/ifce.jpg"></h1> 
       
        <div STYLE="text-align:center;">
        <h4> Campus Acopiara </h4> </fieldset>
           </div>
           </div>
  <!-- Text input-->
<fieldset>
<div class="panel panel-primary">
    <div STYLE="background-color:GreenYellow" class="panel panel-default"><h2 STYLE="text-align:center;"><I>INSCRIÇÃO PARA DEBATE</I></h2></div>
     
    <div class="panel-body" STYLE="background-color:beige";>
<div class="form-group">
<div class="col-md-11 control-label">
  <fieldset>
        <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
</div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">Nome<h11>*</h11></label>  
  <div class="col-md-8">
  <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">CPF <h11>*</h11></label>  
  <div class="col-md-2">
  <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
  </div>
  
  <label class="col-md-1 control-label" for="Nome">Nascimento<h11>*</h11></label>  
  <div class="col-md-2">
  <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
</div>

<!-- Multiple Radios (inline) -->
  <label class="col-md-1 control-label" for="radios">Sexo <h11>*</h11></label>
  <div class="col-md-4"> 
    <label required="" class="radio-inline" for="radios-0" >
      <input name="sexo" id="sexo" value="feminino" type="radio" required>
      Feminino
    </label> 
    <label class="radio-inline" for="radios-1">
      <input name="sexo" id="sexo" value="masculino" type="radio">
      Masculino
    </label>
     <label class="radio-inline" for="radios-1">
      <input name="sexo" id="sexo" value="masculino" type="radio">
      Outros
    </label>
  </div>
</div>


<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Telefone <h11>*</h11></label>
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
      OnKeyPress="formatar('## #####-####', this)">
    </div>
  </div>
  
    <label class="col-md-1 control-label" for="prependedtext">Telefone</label>
     <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13"  pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
      OnKeyPress="formatar('## #####-####', this)">
<<<<<<< HEAD
    </div>
  </div>
 </div> 
<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Email <h11>*</h11></label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
    </div>
  </div>
=======
    </div>
  </div>
 </div> 
<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Email <h11>*</h11></label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
    </div>
  </div>
>>>>>>> master
</div>
<!-- Search input-->

<!-- Prepended text-->

<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
      <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon">Rua<h11>*</h11></span>
      <input id="text" name="text" class="form-control" placeholder="" required=""  type="text">
    </div>
    </div>
  
  <div class="form-group">
  <label class="col-md-1 control-label" for="prependedtext"></label>
  <div>
      <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon">Cidade<h11>*</h11></span>
      <input id="text" name="text" class="form-control" placeholder="" required=""  type="text">
    </div>
    </div>
  </div>
  <div class="form-group">
  <label class="col-md-1 control-label" for="prependedtext"></label>
  <div>
      <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon">Bairro<h11>*</h11></span>
      <input id="text" name="text" class="form-control" placeholder="" required=""  type="text">
<<<<<<< HEAD
    </div>
=======
>>>>>>> master
    </div>
    </div>
  </div>
   
   </div>
  </div>
<<<<<<< HEAD
   
   </div>
  </div>
=======
>>>>>>> master
  <label class="col-md-2 control-label" for="selectbasic">Selecione a Cidade que Quer Participar <h11>*</h11></label>
  
  <div class="col-md-3">
    <select required id="Mesa Redonda" name="Mesa Redonda" class="form-control">
     <option value="Acaraú">Acaraú</option>
    <option value="Acopiara">Acopiara</option>
    <option value="Aracati">Aracati </option>
    <option value="Baturité">Baturité</option>
    <option value="Boa Viagem">Boa Viagem</option>
    <option value="Camocim">Camocim</option>
    <option value="Canindé">Canindé</option>
    <option value="Caucaia">Caucaia</option>
    <option value="Cedro">Cedro</option>
    <option value="Crateús">Crateús</option>
    <option value="Crato">Crato</option>
    <option value="Fortaleza">Fortaleza</option>
    <option value="Guaramiranga">Guaramiranga</option>
    <option value="Horizonte">Horizonte</option>
    <option value="Iguatu">Iguatu </option>
    <option value="Itapipoca">Itapipoca</option>
    <option value="Jaguaribe">Jaguaribe</option>
    <option value="Jaguaruana">Jaguaruana</option>
    <option value="JN">Juazeiro do Norte</option>
    <option value="LN">Limoeiro do Norte</option>
    <option value="Maracanaú">Maracanaú</option>
    <option value="Maranguape">Maranguape</option>
    <option value="Mombaça">Mombaça</option>
    <option value="MV">Morada Nova</option>
    <option value="Paracuru">Paracuru</option>
    <option value="Pecém">Pecém</option>
    <option value="PIF">Polo de Inovação Fortaleza</option>
     <option value="Quixadá">Quixadá </option>
      <option value="Reitoria">Reitoria</option>
       <option value="Sobral">Sobral</option>
        <option value="TN">Tabuleiro do Norte</option>
         <option value="Tauá">Tauá</option>
          <option value="Tianguá">Tianguá</option>
           <option value="Ubajara">Ubajara </option>
            <option value="Umirim">Umirim</option>
    </select>
  </div>
<div class="form-group">
    
  <label class="col-md-2 control-label" for="selectbasic">Escolher Tema<h11>*</h11></label>
  
  <div class="col-md-3">
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
  <label class="col-md-2 control-label" for="Nome">Formação Acedêmica<h11>*</h11></label>  
  <div class="col-md-8">
  <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text">
  </div>
<<<<<<< HEAD
=======
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
>>>>>>> master
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