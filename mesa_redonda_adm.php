
<!DOCTYPE html>
<html lang='en'>
  
 <div class="container">
<form action="index.php" method="post">
   <div>
          <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->
          <div class="container">
<form action="index.php" method="post">
   <div>
        <fieldset>
        
        <h1 STYLE="text-align:center;"> <IMG SRC="https://2.bp.blogspot.com/-QYgmjjRaouk/TkPusQrEGxI/AAAAAAAABIE/JlTLuECoQYc/s300/ifce.jpg"></h1>  
       
        <div STYLE="text-align:center;">
        <h4> Campus Acopiara </h4> </fieldset>
           </div>
           </div>
  <!-- Text input-->
<fieldset>
<div class="panel panel-primary">
    <div STYLE="background-color:GreenYellow" class="panel panel-default"><h2 STYLE="text-align:center;"><I>INSERIR INFORMAÇÕES SOBRE A MESA REDONDA</I></h2></div>
     
    <div class="panel-body" STYLE="background-color:beige";>
<div class="form-group">
<div class="col-md-11 control-label">
  <fieldset>
        <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
</div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">Nome do Coordenador da Mesa Redonda<h11>*</h11></label>  
  <div class="col-md-8">
  <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">Quantidades de pessoas estimadas<h11>*</h11></label>  
  <div class="col-md-1">
  <input id="Vagas" name="Vagas" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
  </div>
  <fieldset>
  <label class="col-md-1 control-label" for="Nome">Data da Mesa Redonda<h11>*</h11></label>  
  <div class="col-md-2">
  <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="date" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
</div>
<label class="col-md-1 control-label" for="time">Hora de Início<h11>*</h11></label>  
  <div class="col-md-2">
  <input id="time" name="time" placeholder="hh/mm" class="form-control input-md" required="" type="time" maxlength="10" OnKeyPress="formatar('##/##', this)" onBlur="showhide()">
</div>
</br>
<label class="col-md-1 control-label" for="Nome">Hora do Final<h11>*</h11></label>  
  <div class="col-md-2">
  <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="time" maxlength="10" OnKeyPress="formatar('##/##', this)" onBlur="showhide()">
</div>
</fieldset>
<!-- Multiple Radios (inline) -->
 <div>

  <label class="col-md-1 control-label" for="radios">Público Alvo <h11>*</h11></label>
  <div class="col-md-5"> 
    <label required="" class="radio-inline" for="radios-0">
      <input name="Crianças" id="sexo" value="Crianças" type="radio" required>
      Crianças
    </label> 
    <label class="radio-inline" for="radios-1">
      <input name="Adolescentes" id="Adolescentes" value="Crianças" type="radio">
      Adolescentes
    </label>
     <label class="radio-inline" for="radios-1">
      <input name="Jovens" id="Jovens" value="masculino" type="radio">
      Jovens
    </label>
    
  <label class="radio-inline" for="radios-1">
      <input name="Idosos" id="Idosos" value="Idosos" type="radio">
     Idosos
    </label>
  </div>
<label class="radio-inline" for="radios-1">
      <input name="Outros" id="Outros" value="Outros" type="radio">
    Outros
  </div>
     </label>
    <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon">Descreva Outros<h11>*</h11></span>
      <input id="text" name="text" class="form-control" placeholder="" required=""  type="text">
    </div>
    </div>
      <!-- Prepended text-->
</div>
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Telefone da Coordenação da Mesa Redonda<h11>*</h11></label>
  <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
      OnKeyPress="formatar('## #####-####', this)">
    </div>
  </div>
      <label class="col-md-1 control-label" for="prependedtext">Telefone do Campus </label>
     <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13"  pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
      OnKeyPress="formatar('## #####-####', this)">
    </div>
  </div>
 </div> 
  
<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Email para dúvidas sobre a Mesa Redonda<h11>*</h11></label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
    </div>
  </div>
</div>
<!-- Search input-->

<!-- Prepended text-->

<div>

<div class="form-group">
   
  <label class="col-md-2 control-label" for="prependedtext">Programação</label>
      <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon">Tema<h11>*</h11></span>
      <input id="text" name="text" class="form-control" placeholder="" required=""  type="text">
    </div>
    </div>
  
  <div class="form-group">
  <label class="col-md-0 control-label" for="prependedtext"></label>
  <div>
      <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon">Ideia Central<h11>*</h11></span>
      <input id="text" name="text" class="form-control" placeholder="" required=""  type="text">
    </div>
    </div>
  </div>
  <div class="form-group">
  <label class="col-md-0 control-label" for="prependedtext"></label>
  <div>
      <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon">Local<h11>*</h11></span>
       <input id="text" name="text" class="form-control" placeholder="" required=""  type="text">
    </div>
    </div>
  </div>
   </div>
   </div>
 
  </div>

  <label class="col-md-2 control-label" for="selectbasic">Selecione o Campus que vai Realizar a Mesa Redonda <h11>*</h11></label>
    <div class="col-md-3">
    <select required id="Mesa Redonda" name="Mesa Redonda" class="form-control">
     <option value="Acaraú">Campus Acaraú</option>
    <option value="Acopiara">Campus Acopiara</option>
    <option value="Aracati">Campus Aracati </option>
    <option value="Baturité">Campus Baturité</option>
    <option value="Boa Viagem">Campus Boa Viagem</option>
    <option value="Camocim">Campus Camocim</option>
    <option value="Canindé">Campus Canindé</option>
    <option value="Caucaia">Campus Caucaia</option>
    <option value="Cedro">Campus Cedro</option>
    <option value="Crateús">Campus Crateús</option>
    <option value="Crato">Campus Crato</option>
    <option value="Fortaleza">Campus Fortaleza</option>
    <option value="Guaramiranga">Campus Guaramiranga</option>
    <option value="Horizonte">Campus Horizonte</option>
    <option value="Iguatu">Campus Iguatu </option>
    <option value="Itapipoca">Campus Itapipoca</option>
    <option value="Jaguaribe">Campus Jaguaribe</option>
    <option value="Jaguaruana">Campus Jaguaruana</option>
    <option value="JN">Campus Juazeiro do Norte</option>
    <option value="LN">Campus Limoeiro do Norte</option>
    <option value="Maracanaú">Campus Maracanaú</option>
    <option value="Maranguape">Campus Maranguape</option>
    <option value="Mombaça">Campus Mombaça</option>
    <option value="MV">Campus Morada Nova</option>
    <option value="Paracuru">Campus Paracuru</option>
    <option value="Pecém">Campus Pecém</option>
    <option value="PIF">Campus Polo de Inovação Fortaleza</option>
     <option value="Quixadá">Campus Quixadá </option>
      <option value="Reitoria">Campus Reitoria</option>
       <option value="Sobral">Campus Sobral</option>
        <option value="TN">Campus Tabuleiro do Norte</option>
         <option value="Tauá">Campus Tauá</option>
          <option value="Tianguá">Campus Tianguá</option>
           <option value="Ubajara">Campus Ubajara </option>
            <option value="Umirim">Campus Umirim</option>
    </select>
  </div>

  <h2><center>Inserir Convite:<input type="file" name="foto"> </h2></center>
</div>
 <fieldset>
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-md-8">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Inscrever a Mesa Redonda</button>
        <p></p>

    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar Inscrição</button>
  </div>
</div>
</fieldset>
</form>
</div>
          <!-- FIM PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->


</body>

</html>