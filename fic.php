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
            <h1 class="h3 mb-0 text-gray-800">FIC</h1>
            
          </div>

          <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->
          <div class="container">
          <form method="post" id=C.Estudante action="index.php">
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
  <input type="text" name="Curso" size="13" maxlength="100"  />
  </fieldset>
  FORMA DE INGRESSO: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp MODALIDADE DE CONCORRÊNCIA: 
   <fieldset>
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <INPUT TYPE="checkbox" NAME="NA" VALUE="NA">NA 
  <INPUT TYPE="checkbox" NAME="AC" VALUE="AC">AC
  <INPUT TYPE="checkbox" NAME="L1" VALUE="L1">L1
  <INPUT TYPE="checkbox" NAME="L2" VALUE="L2">L2
  <INPUT TYPE="checkbox" NAME="L3" VALUE="L3">L3
  <INPUT TYPE="checkbox" NAME="L4" VALUE="L4">L4
  <INPUT TYPE="checkbox" NAME="LD" VALUE="LD">LD
  <INPUT TYPE="checkbox" NAME="L10" VALUE="L10">L10
  <INPUT TYPE="checkbox" NAME="L12" VALUE="L12">L12
  <INPUT TYPE="checkbox" NAME="L14" VALUE="L14">L14
    </fieldset>
  DADOS PESSOAIS
   <br/>
  NOME: 
  <br/>
  <fieldset> <input type="text"> </fieldset>
    Nome Social:
   <br/>
   <fieldset> <input type="text" name="NomeS" /> </fieldset>
   Endereço  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Nº &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Complemento
  <fieldset>
  <input type="text" name="Endereço" />
  <input type="text" name="Nº" />
  <input type="text" name="Complemento" />
  </fieldset>
   Cidade &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Bairro  &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CEP
  <fieldset>
  <input type="text" name="Cidade" />
  <input type="text" name="Bairro" />
  <input type="text" name="CEP" />
  </fieldset>
     Sexo &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Telefone comercial  &nbsp &nbsp &nbsp &nbsp Telefone residencial &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp Telefone Celular &nbsp 
  <fieldset> 
  <input type="text" name="Sexo" />&nbsp
  <input type="text" name="Email"/> &nbsp
  <input type="tel" name="TelefoneComer."/>&nbsp
  <input type="tel" name="TelefoneRes."/>&nbsp
  <input type="tel" name="TelefoneCel."/>
  </fieldset>
  Nacionalidade
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  Estado civil
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  
  Nº de Filho 
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
  Profissão
  <fieldset>
  <input type="text" name="Naturalidade" />
  <input type="text" name="Estado civil" />
  <input type="text" name="Nº de Filho" />
  <input type="text" name="Profissão" />
  </fieldset>
  Naturalidade
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  Raça/Cor
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
  Grau de Instrução  
  <fieldset>
  <input type="text" name="Naturalidade" />
  <input type="text" name="Raça/Cor" />
  <input type="text" name="Grau de Instrução" />
  </fieldset>
  Escola onde concluiu o ensino ( ) Fundamental ( ) Médio   &nbsp &nbsp Ano de Conclusão 
  <fieldset>
  <input type="text" name="Escola" />
   &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  <input type="text" id="numero" placeholder="0000">
   </fieldset>
   Escola onde concluiu a graduação &nbsp &nbsp Ano de Conclusão 
  <fieldset>
  <input type="text" name="graduação" />  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" id="numero" placeholder="0000">
   </fieldset>
   Nome do curso de graduação &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp tipo de escola de origem
  <fieldset>
  <input type="text" name="Ingresso" />&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
  <input type="checkbox"> Publica 
  <input type="checkbox"> </textarea> Privada
  </fieldset>
  <fieldset>
  Necessidades Especiais: 
  <input type="checkbox" name="gender" value="Física">Física 
  <input type="checkbox"> Visual
  <input type="checkbox"> Auditiva
  <input type="checkbox"> Mental
  <input type="checkbox"> Multipla
  <input type="checkbox"> Supertição
  <input type="checkbox"> Condutas tipicas
 <input type="checkbox"> Outras
  </fieldset>
   Documentação &nbsp &nbsp &nbsp &nbsp CPF &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp nº Cns 
   <fieldset>
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp
   &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp
   <input type="CPF" id="numero" placeholder="000.000.000-00">  &nbsp &nbsp &nbsp <input type="CNS" name="Cns"/>
   </fieldset>
   Nº identidade
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  Estado
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  
  Orgão expedidor 
  &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  Data
  <fieldset>
  <input type="text" name="Nº identidade" />
  <input type="text" name="Estado" />
  <input type="text" name="Orgão expedidor" />
  <input type="text" name="Data" />
  </fieldset>
  Nº Título de Eleitor
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  Zona Eleitoral
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  
  Seção Eleitoral 
  &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  Data
  <fieldset>
  <input type="text" name="Título" />
  <input type="text" name="Zona_Eleitoral" />
  <input type="text" name="Seção_Eleitoral" />
  <input type="text" name="Data" />
  </fieldset>
   Nº Reservista
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  Região Militar
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  
  C.E.M 
  &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 Ano
  <fieldset>
  <input type="text" name="Reservista" />
  <input type="text" name="Região" />
  <input type="text" name="C.E.M" />
  <input type="text" name="Ano" />
  </fieldset>
   Dados da família
   <br/>
   Nome do Pai 
   &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
   Nome da Mãe
   <fieldset>
   <input type="text" name="Pai" />
   &nbsp&nbsp &nbsp &nbsp 
   <input type="text" name="Mãe" />
   </fieldset>
   Grau de Intrução do Pai 
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
   Grau de Intrução da Mãe
   <fieldset>
   <input type="text" name="G_Pai" />
    &nbsp&nbsp &nbsp &nbsp 
   <input type="text" name="G_Mãe" />
   </fieldset>
   Estado Civil dos Pais 
   <fieldset>
   <input type="text" name="E.C_Pais" /> &nbsp &nbsp 
  <INPUT TYPE="checkbox" NAME="ObtoPai" VALUE="ObtoPai"> Pai Falecido 
  <INPUT TYPE="checkbox" NAME="ObtoMae" VALUE="ObtoMae"> Mãe Falecida
   </fieldset>
   Endereço &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Nº  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Complemento &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Bairro
   <fieldset>
   <input type="text" name="Endereço" /> &nbsp &nbsp
   <input type="text" name="Nº" /> &nbsp &nbsp
   <input type="text" name="Complemento" /> &nbsp &nbsp
   <input type="text" name="Bairro" /> &nbsp &nbsp
   </fieldset>
   Cidade &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CEP
   <fieldset>
   <input type="text" name="Cidade" /> &nbsp &nbsp
   <input type="CEP" id="numero" placeholder="00.000-000">
   </fieldset>
   Email dos Pais &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Telefone comercial  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Telefone residencial  &nbsp &nbsp  &nbsp &nbsp &nbsp Telefone Celular  
  <fieldset>
  <input type="text" name="Email"/> &nbsp
  <input type="tel" name="TelefoneComer."/>&nbsp
  <input type="tel" name="TelefoneRes."/>&nbsp
  <input type="tel" name="TelefoneCel."/>
  </fieldset>
  <fieldset>
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Nº de pessoas na família  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp&nbsp &nbsp Com quem reside
  <br/>Renda Familiar Percapita
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <input type="text" name="pessoas" /> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <input type="text" name="quem_reside" />
  <br/>
   <INPUT TYPE="checkbox" NAME="Salario" VALUE="S"> NPR à 0,5 SM &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <INPUT TYPE="checkbox" NAME="Salario" VALUE="S2"> 1 SM à RPC 1,5 SM &nbsp &nbsp &nbsp &nbsp 
   <INPUT TYPE="checkbox" NAME="Salario" VALUE="S4"> 2,5 SM à RPC 3,5 SM
   &nbsp &nbsp &nbsp &nbsp *SM = Salário Mínimo 
  <br/>
  <INPUT TYPE="checkbox" NAME="Salario" VALUE="S1">  0,5 SM à RPC/1 SM &nbsp 
  <INPUT TYPE="checkbox" NAME="Salario" VALUE="S3"> 1,5 SM > RPC 2,5 SM &nbsp &nbsp &nbsp
  <INPUT TYPE="checkbox" NAME="Salario" VALUE="S5"> RPC = 3 SM
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
   ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
   <fieldset>
    <br/>
    <br/>
  <div> 
       &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  DIRETORIA DE ENSINO - DIREN &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp SIMESTRE _______________ ANO __________
<br/>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CONTROLADORIA DE CONTROLE ACADÊMICO-CCA
       <h3 STYLE=";"><IMG SRC="https://2.bp.blogspot.com/-QYgmjjRaouk/TkPusQrEGxI/AAAAAAAABIE/JlTLuECoQYc/s1600/ifce.jpg">  &nbsp &nbsp &nbsp &nbsp COMPROVANTE DE PRÉ-MATRÍCULA &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  _____________/____________/___________
        
       &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <h3> Campus Acopiara </h3>
<br/>
    <br/>
      NOME DO ALUNO: _________________________________________________&nbsp &nbsp &nbsp ASSINATURA DO RESPONSÁVEL (CCA/IFCE)  __________________________________________
  <br/>
   
           </div>
     <br/>
      <div>
   
<br/>
 <br/>
 
     <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <script src="./bootstrap/js/./bootstrap.min.js"></script>
  <script src="https:/ajax.googleaois.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </fieldset>
  <input type="submit" value="CONFIRMAR INSCRIÇÃO" />
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