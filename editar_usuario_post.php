<?php
//Puxamos o autoload 
require_once("config.php");
require_once("modal.php"); 

$result = new Usuarios();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
		
	$id_usuario = $_POST['id_usuario'];

	echo $id_usuario;
}
?>