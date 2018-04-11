<?php



$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "cadastro1";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno)
	echo "Falha: (".$mysqli->connect_errorno.") ".$mysqli->connect_error;







?>