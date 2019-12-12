<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Crie a sua conta aqui!</h1>
              </div> 
              <form method="get" action=".">

            <div class="form-group">
              <div class="form-label-group">
              <label for="firstName">Nome completo</label>
                <input type="text" id="firstName" class="form-control" placeholder="Nome completo" required="required" name="nome">
                
              </div>
            </div>

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-2">
                  <div class="form-label-group">
                    <label for="inicio">Sexo</label>
                  </div>
                </div>
                <div class="col-md-2">
                <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" value="M" id="masculino" name="sexo" checked>
                      <label class="custom-control-label" for="masculino">M</label>
                    </div>
                </div>
                <div class="col-md-2">
                <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" value="F" id="feminino" name="sexo">
                      <label class="custom-control-label" for="feminino">F</label>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                  <label for="cpf">CPF</label>
                    <input type="number" id="cpf" class="form-control" placeholder="cpf" required="required" name="cpf">
                    
                  </div>
                </div>
              </div>
            </div>

            
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                  <label for="dtnascimento">Data Nascimento</label>
                    <input type="date" id="dtnascimento" class="form-control" placeholder="Data Nascimento" required="required" autofocus="autofocus" name="data_de_nascimento">
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                  <label for="telefone">Telefone</label>
                    <input type="number" id="telefone" class="form-control" placeholder="telefone" required="required" name="telefone">
                    
                  </div>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <div class="form-label-group">
              <label for="inputEmail">Email</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email" required="required" name="email">
                    
              </div>
            </div>

            <div class="form-group">
              <div class="form-row">
              <div class="col-md-3">
                  <div class="form-label-group">
                  <label for="cep">CEP</label>
                  <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" class="form-control" placeholder="CEP" required="required">  
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-label-group">
                    <label for="cep">Estado</label>
                      <select class="form-control" id="uf" name="uf">
                      <option value="0">Estado</option>
                    <?php 
                    include 'template/conn.php';
                    $select = "SELECT * FROM estado";

                    $resultado 	= $conn->query($select);


                    if ($resultado->num_rows > 0) {
                      while($linha = $resultado->fetch_assoc()) {

                        $sigla = $linha['sigla'];
                        $id = $linha['id'];?>

                        <option value="<?php echo $sigla; ?>"><?php echo $sigla; ?></option>
                        <?php	
                      }
                    }
                    ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                  <label for="cidade">Cidade</label>
                  <input name="cidade" type="text" id="cidade"  class="form-control" placeholder="Cidade" required="required"> 
                  </div>
                </div>
              </div>
            
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-8">
                  <div class="form-label-group">
                  <label for="rua">Rua</label>
                    <input name="rua" type="text" id="rua"  class="form-control" placeholder="Rua" required="required">
                    
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-label-group">
                  <label for="num">Número</label>
                    <input type="text" id="num" class="form-control" placeholder="Núm" required="required" name="num">
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                  <label for="complemento">Bairro</label>
                  <input name="bairro" type="text" id="bairro"class="form-control" placeholder="Bairro">
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                  <label for="complemento">Complemento</label>
                  <input name="complemento" type="text" id="complemento"class="form-control" placeholder="Complemento">
                    
                  </div>
                </div>
              </div>
            </div>


            </div>

            <button class="btn btn-info btn-block" type="submit">Cadastrar</button>
           

              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.php">Esqueceu a senha?</a>
              </div>
              <div class="text-center">
                <a class="small" href="index.php">Já tem uma conta? Entrar!</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    
    </div>
  <?php include 'template/rodape.php' ?>
  
    

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>

</html>
