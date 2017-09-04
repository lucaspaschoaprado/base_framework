<?php
//Puxamos o autoload 
require_once("config.php");
	
if(!isset($_SESSION)){
	session_start();
}
	
	//Capturando os dados de sessão.
	$data_entrada = $_SESSION["session_data_entrada"];
	$hora_entrada = $_SESSION["session_hora_entrada"];
	$id_usuario = $_SESSION["session_id_usuario"];
	$nome_usuario = $_SESSION["session_nome_usuario"];
	$login_usuario = $_SESSION["session_login_usuario"];
	$status_usuario = $_SESSION["session_status_usuario"];
	
	unset($_SESSION["session_data_entrada"]);
	unset($_SESSION["session_hora_entrada"]);
	unset($_SESSION["session_id_usuario"]);
	unset($_SESSION["session_nome_usuario"]);
	unset($_SESSION["session_login_usuario"]);
	unset($_SESSION["session_status_usuario"]);
	
	session_unset();
	session_destroy();
	
	date_default_timezone_set('America/Sao_Paulo');
	$data_saida = date("d-m-Y");
	$hora_saida = date("H:i:s");
	
	echo("<script language='JavaScript'>location='index.php';</script>");

?>