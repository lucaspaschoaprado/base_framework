<?php
//Puxamos o autoload 
require_once("config.php");
require_once("modal.php"); 

$result = new Usuarios();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
		
	$nome = $_POST['nome'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$data = $_POST['data'];
	$status = $_POST['status'];

	$result->inserirUsuarioSemProcedure($nome, $login, md5($senha), $data, $status);

}
?>