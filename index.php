<?php 
require_once("config.php"); 

$conecta = new Database();

$usuarios = $conecta->select("SELECT * FROM usuarios");

echo json_encode($usuarios);
?>