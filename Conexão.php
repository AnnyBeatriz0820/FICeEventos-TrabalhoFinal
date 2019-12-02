<?php
$servidor="localhost";
$usuario="root";
$senha="";
$basededados="siteeventosefic";

 $conn = new mysqli($servidor, $usuario, '', $basededados); 
if($conn->connect_error) {
	die ("Erro ao conectar com o servidor: " . $conn->connect_error);
   
}else{
echo "conectado ao banco de dados com sucesso!!!";
}
?>