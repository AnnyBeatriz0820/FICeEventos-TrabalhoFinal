<?php
$servidor="localhost";
$usuario="root";
$senha="";
$baseDeDados="fic_eventos";

$conn = new mysqli($servidor,$usuario,$senha,$baseDeDados);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
    echo "ERRO NA CONEXÃO!!!";
}


?>
