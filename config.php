<?php
  
  $servidor = "localhost";
  $usuario = "sncadm";
  $senha = "Oracle123";
  $dbname = "test";
  
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname) or die("N�o foi poss�vel a conex�o com o Banco");

//$db = mysql_select_db($dbname, $conn) or die("Tabela do banco de dados nao encontrada");

	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

?>