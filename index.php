<?php 
require_once("config.php"); 

$result = new Usuarios();

$result->carregaPeloId(1);

echo $result;
?>