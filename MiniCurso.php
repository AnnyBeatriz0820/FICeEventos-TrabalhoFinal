<html>
<body>
  </div>
       <h1> Inscrições para Mini Curso </h1>
     
      <div>

<br/>
<form method="post" action="MiniCurso.php">
   
  <br/>
  Nome Completo: <input type="text" name="Nome" />
  <br/>
  <br/>
   Sexo:
   <input type="radio" name="Sexo" value="Masculino">M
   <input type="radio" name="Sexo" value="Feminino">F
   <input type="radio" name="Sexo" value="Outros">Outros
    <br/>
    <br/>
   <br/>
  Endereço: <input type="text" name="Endereço"/>
  Cidade: <input type="text" name="Cidade"/>
  <br/>
  <br/>
  Estado: <select name="Estado" >
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

  Bairro: <input type="text" name="Bairro"/>
  <br/>
  <br/>
  Distrito: <input type="text" name="Distrito"/>
  <!--Etnia:
   <select name="Étnia" id="Étnia">
    <option value="Branco">Branco</option>
    <option value="Pardo">Pardo</option>
    <option value="Negros">Negros</option>
    <option value="Indígena">Indígena</option>
    <option value="Amarelo">Amarelo</option>
    <option value="Branco">Branco</option>
    <option value="Mulato">Mulato</option>
    <option value="Caboclo">Caboclo</option>
    <option value="Cafuzo">Cafuzo</option>
</select>-->
         <br/>
     <br/>
  Email: <input type="text" id="numero" placeholder="xxxxxx000@xxxxxxx.com" name="Email"/>
   <br/>
   <br/>
   Telefone: <input type="text" id="numero" placeholder="(DDD)9.0000-0000">
   <br/>
   <br/>
   APelido: <input type="text" name="Apelido" />

<br/>
 <br/>
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <script src="./bootstrap/js/./bootstrap.min.js"></script>
  <script src="https:/ajax.googleaois.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <input type="submit" value="Inscrever" />
  </form>
</body>
</html>