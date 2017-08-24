<?php
require_once("config.php"); 

$conecta = new Database();

	$data = (new DateTime($data));
	
	$status = "1";

	$i = 50;
	while($i < 50){
		$i = $i + 1;

	$nome = $i . " - Nome";
	
	$login = $nome;
	$senha = $i;
			
	$lsql = "INSERT INTO usuarios (nome, login, senha, data, status) VALUES ('$nome', '$login', '$senha', '$data', $status')";
	$lquery = mysql_query($lsql);
	
	}

	if( $lquery ){
		echo("<script language='JavaScript'>alert('TESTE REALIZADO COM SUCESSO!'); location='index.php';</script>");
	} else {
		echo mysql_error();
	}
?>