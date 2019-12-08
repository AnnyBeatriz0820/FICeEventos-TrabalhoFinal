<!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->
          <div class="container">

          <form method="post" action="index.php">
<div class="form-group">
<div class="col-md-11 control-label">
        <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
</div>
</div>
 <!-- Text input-->
        <fieldset STYLE="background-color:white";>
        <h4 STYLE="text-align:center;">DIRETORIA DE ENSINO - DIREN <h4 STYLE="text-align:center;">CONTROLADORIA DE CONTROLE ACADÊMICO-CCA</h4>
       <h1> <IMG SRC="https://2.bp.blogspot.com/-QYgmjjRaouk/TkPusQrEGxI/AAAAAAAABIE/JlTLuECoQYc/s300/ifce.jpg">     FICHA DE PRÉ-MATRÍCULA </h1>
        <h3> Campus Acopiara </h3><h3 STYLE="text-align:center;">Obs. Preencha todos os campos. </fieldset></h3>
          <div STYLE="text-align:right;">
        <h6 STYLE="text-align:right;"> <IMG SRC="https://encrypted-tbn0.gstatic.com/mages?q=tbn:ANd9GcRIjyJH6qeNcBRzhdMPye2n8jCU9bfmx5p-OCeRnzosqev1Nl1o&s"> <input type="file" name="foto">  </h6>
           </div>
     <br/>
      <div>
<form method="post" id="cadastro" action="index.php">
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
  FORMA DE INGRESSO:          MODALIDADE DE CONCORRÊNCIA: 
   <fieldset>
                               
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
  <fieldset> <input type="text"> </fieldset>
    Nome Social:
   <br/>
   <fieldset> <input type="text" name="NomeS" /> </fieldset>
Telefone comercial      Telefone residencial        Telefone Celular  
  <fieldset>  
  <input type="tel" name="TelefoneComer."/> 
  <input type="tel" name="TelefoneRes."/> 
  </fieldset>
  Nacionalidade
             
  Estado civil
              
  Nº de Filho 
             
  Profissão
  <fieldset>
  <input type="text" name="Naturalidade" />
  <input type="text" name="Estado civil" />
  <input type="text" name="Nº de Filho" />
  <input type="text" name="Profissão" />
  </fieldset>
  Naturalidade
             
  Raça/Cor
                
  Grau de Instrução  
  <fieldset>
  <input type="text" name="Naturalidade" />
  <input type="text" name="Raça/Cor" />
  <input type="text" name="Grau de Instrução" />
  </fieldset>
  Escola onde concluiu o ensino ( ) Fundamental ( ) Médio     Ano de Conclusão 
  <fieldset>
  <input type="text" name="Escola" />
                                   
  <input type="text" id="numero" placeholder="0000">
   </fieldset>
   Escola onde concluiu a graduação   Ano de Conclusão 
  <fieldset>
  <input type="text" name="graduação" />                <input type="text" id="numero" placeholder="0000">
   </fieldset>
   Nome do curso de graduação          tipo de escola de origem
  <fieldset>
  <input type="text" name="Ingresso" />           
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
   Documentação     CPF                          nº Cns 
   <fieldset>
               
           
   <input type="CPF" id="numero" placeholder="000.000.000-00">     <input type="CNS" name="Cns"/>
   </fieldset>
   Nº identidade
               
  Estado
                
  Orgão expedidor 
               
  Data
  <fieldset>
  <input type="text" name="Nº identidade" />
  <input type="text" name="Estado" />
  <input type="text" name="Orgão expedidor" />
  <input type="text" name="Data" />
  </fieldset>
  Nº Título de Eleitor
              
  Zona Eleitoral
                
  Seção Eleitoral 
               
  Data
  <fieldset>
  <input type="text" name="Título" />
  <input type="text" name="Zona_Eleitoral" />
  <input type="text" name="Seção_Eleitoral" />
  <input type="text" name="Data" />
  </fieldset>
   Nº Reservista
              
  Região Militar
                
  C.E.M 
               
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
                     
   Nome da Mãe
   <fieldset>
   <input type="text" name="Pai" />
      
   <input type="text" name="Mãe" />
   </fieldset>
   Grau de Intrução do Pai 
            
   Grau de Intrução da Mãe
   <fieldset>
   <input type="text" name="G_Pai" />
       
   <input type="text" name="G_Mãe" />
   </fieldset>
   Estado Civil dos Pais 
   <fieldset>
   <input type="text" name="E.C_Pais" />   
  <INPUT TYPE="radio" NAME="ObtoPai" VALUE="Pai"> Pai Falecido 
  <INPUT TYPE="radio" NAME="ObtoMae" VALUE="Mae"> Mãe Falecida
   </fieldset>
   Endereço                 Nº                       Complemento             Bairro
   <fieldset>
   <input type="text" name="Endereço" />   
   <input type="text" name="Nº" />   
   <input type="text" name="Complemento" />   
   <input type="text" name="Bairro" />   
   </fieldset>
   Cidade                   CEP
   <fieldset>
   <input type="text" name="Cidade" />   
   <input type="CEP" id="numero" placeholder="00.000-000">
   </fieldset>
   Email dos Pais           Telefone comercial          Telefone residencial        Telefone Celular  
  <fieldset>
  <input type="text" name="Email"/>  
  <input type="tel" name="TelefoneComer."/> 
  <input type="tel" name="TelefoneRes."/> 
  <input type="tel" name="TelefoneCel."/>
  </fieldset>
  <fieldset>
                                      Nº de pessoas na família             Com quem reside
  <br/>Renda Familiar Percapita
               
  <input type="text" name="pessoas" />          
  <input type="text" name="quem_reside" />
  <br/>
   <INPUT TYPE="radio" NAME="Salario" VALUE="S"> NPR à 0,5 SM       
  <INPUT TYPE="radio" NAME="Salario" VALUE="S2"> 1 SM à RPC 1,5 SM     
   <INPUT TYPE="radio" NAME="Salario" VALUE="S4"> 2,5 SM à RPC 3,5 SM
       *SM = Salário Mínimo 
  <br/>
  <INPUT TYPE="radio" NAME="Salario" VALUE="S1">  0,5 SM à RPC/1 SM  
  <INPUT TYPE="radio" NAME="Salario" VALUE="S3"> 1,5 SM > RPC 2,5 SM    
  <INPUT TYPE="radio" NAME="Salario" VALUE="S5"> RPC = 3 SM
             *RPC = Renda Per Capita 
  
  </fieldset>
  <br/>
   <br/>
    ________________/__________/_________           ___________________________________________________       _________________________________________________
  <br/>
                                                                         Assinatura do Aluno                             Assinatura do Responsável
   <br/>
   <br/>
   <br/>
  
   <fieldset STYLE="background-color:white";><FONT SIZE="2">
     <div> 
      <br/>
                                                                             DIRETORIA DE ENSINO - DIREN                                     SIMESTRE _______________________ ANO __________________
                                                                 CONTROLADORIA DE CONTROLE ACADÊMICO-CCA 
      <br/>
               <IMG SRC="https://2.bp.blogspot.com/-QYgmjjRaouk/TkPusQrEGxI/AAAAAAAABIE/JlTLuECoQYc/s200/ifce.jpg">                                  <h3>         Campus Acopiara                      <h1 STYLE="text-align:center;">COMPROVANTE DE PRÉ-MATRÍCULA </h1>  <h4 STYLE="text-align:right;">______________/_________________/________________ </4>       
       </h3>    
      NOME DO ALUNO: ___________________________________________________________________   ASSINATURA DO RESPONSÁVEL (CCA/IFCE)  ________________________________________________________
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
