<?php
//Iniciando Sessão
session_start();

//error_reporting(0);

//Puxamos o autoload 
require_once("config.php");
require_once("modal.php");

	
date_default_timezone_set('America/Sao_Paulo');
$data_entrada = date("d/m/Y");
$hora_entrada = date("H:i:s");
	
	if($_SESSION["session_data_entrada"] != $data_entrada){
		session_unset();
		session_destroy();
		Alertas::acessoNegadoAlert();
		
		//Interrompe imediatamente a exibição da página.
		exit;
	}
?>