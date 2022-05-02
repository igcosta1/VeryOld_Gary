<?php
// connecting to database
$conn = mysqli_connect("BRBEL2502172", "ADM_DIGITAL", "Adm_Digital1475963", "tabelas_diversas") or die("Conexao com o banco de dados nao encontrada");

// getting user message through ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

//checking user query to database query
$check_data = "SELECT respostas FROM gary_respostas WHERE perguntas LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Tabela do banco de dados nao encontrada.");

// if user query matched to database query we'll show the reply otherwise it go to else statement
if(mysqli_num_rows($run_query) > 0){
    //fetching replay from the database according to the user query
    $fetch_data = mysqli_fetch_assoc($run_query);
    //storing replay to a varible which we'll send to ajax
    $replay = utf8_encode($fetch_data['respostas']);
    echo $replay;
}else{
	$grava = "INSERT INTO gary_duvidas (duvida)
	VALUES ('".$getMesg."')"; 

	if(mysqli_query($conn, $grava)){
		echo "Desculpe, n&atilde;o entendi. Pode tentar com outras palavras, por favor? Tamb&eacute;m vou guardar sua pergunta e procurar uma resposta =)";
	} else {
		echo mysql_error();
	}
	
	
   // echo "Desculpe, n&atilde;o entendi. Pode tentar com outras palavras, por favor? Tamb&eacute;m vou guardar sua pergunta e procurar uma resposta =)";
}

?>