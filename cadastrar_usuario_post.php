<?php
//Puxamos o autoload 
require_once("config.php");
require_once("modal.php"); 

$result = new Usuarios();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
		
	$nome = $_POST['nome'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$nivel_permissao = $_POST['nivel_permissao'];
	$status = $_POST['status']; 

	$result->inserirUsuarioSemProcedure($nome, $login, md5($senha), $nivel_permissao, $status);

}
?>