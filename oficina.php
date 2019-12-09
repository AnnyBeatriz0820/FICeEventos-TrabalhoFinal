
<!DOCTYPE html>
<html lang='en'>

<?php include 'template/cabecalho.php' ?>

<body id='page-top'>
  <!-- Page Wrapper -->
  <div id='wrapper'>
    
    <?php include 'template/menu-lateral.php' ?>

    <!-- Content Wrapper -->
    <div id='content-wrapper' class=''>

      <!-- Main Content -->
      <div id='content'>

        <?php include 'template/menu-superior.php' ?>       

        <!-- Begin Page Content -->
        <div class='container-fluid'>

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>

          </div>

          <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->
          <div class='container'>
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
                  <div STYLE="background-color:GreenYellow" class="panel panel-default"><h2 STYLE="text-align:center;"><I>INSCRIÇÃO EM OFICINA</I></h2></div>

                  <div class="panel-body" STYLE="background-color:beige";>
                    <div class="form-group">
                      <div class="col-md-11 control-label">
                        <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
                      </div>
                    </div>
                    <!-- Text input-->

                    <div class="form-group">
                      <label class="col-md-2 control-label" for="Nome">Nome Completo do Aluno <h11>*</h11></label>  
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
                              <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-1 control-label" for="prependedtext"></label>
                          <div>
                            <div class="col-md-2">
                              <div class="input-group">
                                <span class="input-group-addon">Bairro<h11>*</h11></span>
                                <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text">
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <label class="col-md-2 control-label" for="selectbasic">Estado <h11>*</h11></label>

                      <div class="col-md-3">
                        <select required id="escolaridade" name="escolaridade" class="form-control">
                         <option value="ac">Acre</option>
                         <option value="al">Alagoas</option>
                         <option value="am">Amazonas</option>
                         <option value="ap">Amapá</option>
                         <option value="ba">Bahia</option>
                         <option value="ce">Ceará</option>
                         <option value="df">Distrito Federal</option>
                         <option value="es">Espírito Santo</option>
                         <option value="go">Goiás</option>
                         <option value="ma">Maranhão</option>
                         <option value="mt">Mato Grosso</option>
                         <option value="ms">Mato Grosso do Sul</option>
                         <option value="mg">Minas Gerais</option>
                         <option value="pa">Pará</option>
                         <option value="pb">Paraíba</option>
                         <option value="pr">Paraná</option>
                         <option value="pe">Pernambuco</option>
                         <option value="pi">Piauí</option>
                         <option value="rj">Rio de Janeiro</option>
                         <option value="rn">Rio Grande do Norte</option>
                         <option value="ro">Rondônia</option>
                         <option value="rs">Rio Grande do Sul</option>
                         <option value="rr">Roraima</option>
                         <option value="sc">Santa Catarina</option>
                         <option value="se">Sergipe</option>
                         <option value="sp">São Paulo</option>
                         <option value="to">Tocantins</option>
                       </select>
                     </div>
                     <div class="form-group">

                      <label class="col-md-2 control-label" for="selectbasic">Escolher Oficina<h11>*</h11></label>

                      <div class="col-md-3">
                        <select required id="Oficina" name="Oficina" class="form-control">
                          <option value="EducaçãoFísica">Educação Física</option>
                          <option value="Filosofia">Filosofia</option>
                          <option value="Física">Física</option>
                          <option value="Geografia">Geografia</option>
                          <option value="História">História</option>
                          <option value="Informática">Informática</option>
                          <option value="Inglês">Inglês</option>
                          <option value="Libras">Libras</option>
                          <option value="Literatura">Literatura</option>
                          <option value="Matemática">Matemática</option>
                          <option value="Português">Português</option>
                          <option value="Química">Química</option>
                          <option value="Sociologia">Sociologia</option>
                        </select>
                      </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group">
                      <label class="col-md-2 control-label" for="Cadastrar"></label>
                      <div class="col-md-8">
                        <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Inscrever</button>
                        <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar Inscrição</button>
                      </div>
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