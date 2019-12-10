
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

           <div STYLE="background-color:GreenYellow" class="panel panel-default"><h1 STYLE="text-align:center;"><I>INSCRIÇÃO EM CURSOS FIC</I></h1></div>
          <div class="container">
         
 <fieldset>
 <body div class="panel-body" STYLE="background-color:beige";>
<div>
  <head><meta charset="UTF-8"></head>
      <div>
        <fieldset STYLE="background-color:white";>
        <h4 STYLE="text-align:center;">DIRETORIA DE ENSINO - DIREN <h4 STYLE="text-align:center;">CONTROLADORIA DE CONTROLE ACADÊMICO-CCA</h4>
       <h1> <IMG SRC="https://2.bp.blogspot.com/-QYgmjjRaouk/TkPusQrEGxI/AAAAAAAABIE/JlTLuECoQYc/s300/ifce.jpg"> &nbsp &nbsp &nbsp &nbsp FICHA DE PRÉ-MATRÍCULA </h1>
        <h3> Campus Acopiara </h3><h3 STYLE="text-align:center;">Obs. Preencha todos os campos. </fieldset></h3>
          <div STYLE="text-align:right;">
        <h6 STYLE="text-align:right;"> <IMG SRC="https://encrypted-tbn0.gstatic.com/mages?q=tbn:ANd9GcRIjyJH6qeNcBRzhdMPye2n8jCU9bfmx5p-OCeRnzosqev1Nl1o&s"> <input type="file" name="foto">  </h6>
           </div>
     <br/>
      <div>
<form class="was-validated" method="post" id=C.Estudante action="cadastroEstudante.php">
   <!--Curso: <select name="Curso" >
    <option value="Ingles">Ingles</option>
    <option value="Libras">Libras</option>
    <option value="Matematica">Matematica</option>
    <option value="Espanhol">Espanhol</option>
    <option value="Programacao">Programaçao</option>
    <option value="Introdução a Computacao">Introdução a Computacao</option>
    <option value="Meio Ambiente">Meio Ambiente</option>
    <option value="es">Informatica</option>
     
</select>
 Matrícula: <input type="text" name="Nome" />
 <br/>-->
CURSO/MODALIDADE: 
  <fieldset>
  <input type="text" name="Curso" size="13" maxlength="100" required="" />
  </fieldset>
  FORMA DE INGRESSO: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp MODALIDADE DE CONCORRÊNCIA: 
   <fieldset>
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <INPUT TYPE="radio" NAME="NA" VALUE="NA">NA 
  <INPUT TYPE="radio" NAME="AC" VALUE="AC">AC
  <INPUT TYPE="radio" NAME="L1" VALUE="L1">L1
  <INPUT TYPE="radio" NAME="L2" VALUE="L2">L2
  <INPUT TYPE="radio" NAME="L3" VALUE="L3">L3
  <INPUT TYPE="radio" NAME="L4" VALUE="L4">L4
  <INPUT TYPE="radio" NAME="LD" VALUE="LD">LD
  <INPUT TYPE="radio" NAME="L10" VALUE="L10">L10
  <INPUT TYPE="radio" NAME="L12" VALUE="L12">L12
  <INPUT TYPE="radio" NAME="L14" VALUE="L14">L14
  </fieldset>
  DADOS PESSOAIS
   <br/>
  NOME: 
  <br/>
  <fieldset> <input type="text" required=""> </fieldset>
    Nome Social:
   <br/>
   <fieldset> <input type="text" name="NomeS" required/> </fieldset>
   Endereço  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Nº &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Complemento
  <fieldset>
  <input type="text" name="Endereço" required/>
  <input type="text" name="Nº" required/>
  <input type="text" name="Complemento" required/>
  </fieldset>
   Cidade &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Bairro  &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CEP
  <fieldset>
  <input type="text" name="Cidade" required/>
  <input type="text" name="Bairro" required/>
  <input type="text" name="CEP" required/>
  </fieldset>
     Sexo &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Telefone comercial  &nbsp &nbsp &nbsp &nbsp Telefone residencial &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp Telefone Celular &nbsp 
  <fieldset> 
  <input type="text" name="Sexo" required/>&nbsp
  <input type="text" name="Email" required/> &nbsp
  <input type="tel" name="TelefoneComer." required/>&nbsp
  <input type="tel" name="TelefoneRes." required/>&nbsp
  <input type="tel" name="TelefoneCel." required/>
  </fieldset>
  Nacionalidade
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  Estado civil
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  
  Nº de Filho 
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
  Profissão
  <fieldset>
  <input type="text" name="Naturalidade" required/>
  <input type="text" name="Estado civil" required/>
  <input type="text" name="Nº de Filho" required/>
  <input type="text" name="Profissão" required/>
  </fieldset>
  Naturalidade
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  Raça/Cor
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
  Grau de Instrução  
  <fieldset>
  <input type="text" name="Naturalidade" required/>
  <input type="text" name="Raça/Cor" required/>
  <input type="text" name="Grau de Instrução" required/>
  </fieldset>
  Escola onde concluiu o ensino ( ) Fundamental ( ) Médio   &nbsp &nbsp Ano de Conclusão 
  <fieldset>
  <input type="text" name="Escola" required/>
   &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  <input type="text" id="numero" placeholder="0000" required>
   </fieldset>
   Escola onde concluiu a graduação &nbsp &nbsp Ano de Conclusão 
  <fieldset>
  <input type="text" name="graduação" />  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" id="numero" placeholder="0000" required>
   </fieldset>
   Nome do curso de graduação &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp tipo de escola de origem
  <fieldset>
  <input type="text" name="Ingresso" required/>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
  <input type="radio"> Publica 
  <input type="radio"> </textarea> Privada
  </fieldset>
  <fieldset>
  Necessidades Especiais: 
  <input type="radio" name="gender" value="Física">Física 
  <input type="radio"> Visual
  <input type="radio"> Auditiva
  <input type="radio"> Mental
  <input type="radio"> Multipla
  <input type="radio"> Supertição
  <input type="radio"> Condutas tipicas
 <input type="radio"> Outras
  </fieldset>
   Documentação &nbsp &nbsp &nbsp &nbsp CPF &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp nº Cns 
   <fieldset>
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp
   &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp
   <input type="CPF" id="numero" placeholder="000.000.000-00">  &nbsp &nbsp &nbsp <input type="CNS" name="Cns" required/>
   </fieldset>
   Nº identidade
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  Estado
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  
  Orgão expedidor 
  &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  Data
  <fieldset>
  <input type="text" name="Nº identidade" required/>
  <input type="text" name="Estado" required/>
  <input type="text" name="Orgão expedidor" required/>
  <input type="text" name="Data" required/>
  </fieldset>
  Nº Título de Eleitor
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  Zona Eleitoral
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  
  Seção Eleitoral 
  &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  Data
  <fieldset>
  <input type="text" name="Título" required/>
  <input type="text" name="Zona_Eleitoral" required/>
  <input type="text" name="Seção_Eleitoral" required/>
  <input type="text" name="Data" required/>
  </fieldset>
   Nº Reservista
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  Região Militar
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  
  C.E.M 
  &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 Ano
  <fieldset>
  <input type="text" name="Reservista" required/>
  <input type="text" name="Região" required/>
  <input type="text" name="C.E.M" required/>
  <input type="text" name="Ano" required/>
  </fieldset>
   Dados da família
   <br/>
   Nome do Pai 
   &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
   Nome da Mãe
   <fieldset>
   <input type="text" name="Pai" required/>
   &nbsp&nbsp &nbsp &nbsp 
   <input type="text" name="Mãe" required/>
   </fieldset>
   Grau de Intrução do Pai 
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
   Grau de Intrução da Mãe
   <fieldset>
   <input type="text" name="G_Pai" required/>
    &nbsp&nbsp &nbsp &nbsp 
   <input type="text" name="G_Mãe" required/>
   </fieldset>
   Estado Civil dos Pais 
   <fieldset>
   <input type="text" name="E.C_Pais" required/> &nbsp &nbsp 
  <INPUT TYPE="radio" NAME="ObtoPai" VALUE="Pai"> Pai Falecido 
  <INPUT TYPE="radio" NAME="ObtoMae" VALUE="Mae"> Mãe Falecida
   </fieldset>
   Endereço &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Nº  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Complemento &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Bairro
   <fieldset>
   <input type="text" name="Endereço" required/> &nbsp &nbsp
   <input type="text" name="Nº" required/> &nbsp &nbsp
   <input type="text" name="Complemento" required/> &nbsp &nbsp
   <input type="text" name="Bairro" required/> &nbsp &nbsp
   </fieldset>
   Cidade &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CEP
   <fieldset>
   <input type="text" name="Cidade" required/> &nbsp &nbsp
   <input type="CEP" id="numero" placeholder="00.000-000" required>
   </fieldset>
   Email dos Pais &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Telefone comercial  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Telefone residencial  &nbsp &nbsp  &nbsp &nbsp &nbsp Telefone Celular  
  <fieldset>
  <input type="text" name="Email" required/> &nbsp
  <input type="tel" name="TelefoneComer." required/>&nbsp
  <input type="tel" name="TelefoneRes." required/>&nbsp
  <input type="tel" name="TelefoneCel." required/>
  </fieldset>
  <fieldset>
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Nº de pessoas na família  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp&nbsp &nbsp Com quem reside
  <br/>Renda Familiar Percapita
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <input type="text" name="pessoas" required/> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <input type="text" name="quem_reside" required/>
  <br/>
   <INPUT TYPE="radio" NAME="Salario" VALUE="S" > NPR à 0,5 SM &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <INPUT TYPE="radio" NAME="Salario" VALUE="S2"> 1 SM à RPC 1,5 SM &nbsp &nbsp &nbsp &nbsp 
   <INPUT TYPE="radio" NAME="Salario" VALUE="S4"> 2,5 SM à RPC 3,5 SM
   &nbsp &nbsp &nbsp &nbsp *SM = Salário Mínimo 
  <br/>
  <INPUT TYPE="radio" NAME="Salario" VALUE="S1">  0,5 SM à RPC/1 SM &nbsp 
  <INPUT TYPE="radio" NAME="Salario" VALUE="S3"> 1,5 SM > RPC 2,5 SM &nbsp &nbsp &nbsp
  <INPUT TYPE="radio" NAME="Salario" VALUE="S5"> RPC = 3 SM
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  *RPC = Renda Per Capita 
  
  </fieldset>
  <br/>
   <br/>
&nbsp &nbsp &nbsp &nbsp ________________/__________/_________ &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp___________________________________________________&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  _________________________________________________
  <br/>
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Assinatura do Aluno &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Assinatura do Responsável
   <br/>
   <br/>
   <br/>
   ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
   <fieldset STYLE="background-color:white";><FONT SIZE="2">
     <div> 
      <br/>
       &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp DIRETORIA DE ENSINO - DIREN   &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  SIMESTRE _______________________ ANO __________________
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CONTROLADORIA DE CONTROLE ACADÊMICO-CCA 
      <br/>
       &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<IMG SRC="https://2.bp.blogspot.com/-QYgmjjRaouk/TkPusQrEGxI/AAAAAAAABIE/JlTLuECoQYc/s200/ifce.jpg"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <h3> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Campus Acopiara  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <h1 STYLE="text-align:center;">COMPROVANTE DE PRÉ-MATRÍCULA </h1>  <h4 STYLE="text-align:right;">______________/_________________/________________ </4>       
       </h3>&nbsp &nbsp &nbsp &nbsp
      NOME DO ALUNO: ___________________________________________________________________&nbsp &nbsp &nbsp ASSINATURA DO RESPONSÁVEL (CCA/IFCE)  ________________________________________________________
     </div>
     <div>
  <br/>
  </fieldset>
  <div class="form-group">
  <label class="col-md-2 control-label" for="Inscrever"></label>
  <div class="col-md-8">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Inscrever</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar Inscrição</button>
  </div>
</div>
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