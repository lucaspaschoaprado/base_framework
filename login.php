<?php
//Iniciando Sessão
session_start();

//Puxamos o autoload 
require_once("config.php");
require_once("modal.php"); 

$resultado = new Usuarios();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
		
	$login_usuario = $_POST['login'];
	$senha_usuario = md5($_POST['senha']);
	
	$resultado->validaLogin($login_usuario, $senha_usuario);
	$validaLogin = json_decode($resultado, true);
	$id_usuario = $validaLogin["id_usuario"];

	//Caso o código passe pela validação na classe Usuários, seguimos com uma consulta puxando o restante dos dados do usuário.
	$resultado->carregaPeloId($id_usuario);
	$carregaPeloId = json_decode($resultado, true);
	$nome_usuario = $carregaPeloId["nome_usuario"];
	$status_usuario = $carregaPeloId["status_usuario"];

	//Criamos as variáveis de entrada para salvar os dados em sessão.
	date_default_timezone_set('America/Sao_Paulo');
	$data_entrada = date("d-m-Y");
	$hora_entrada = date("H:i:s");

	$_SESSION["session_data_entrada"] = $data_entrada;
	$_SESSION["session_hora_entrada"] = $hora_entrada;
	$_SESSION["session_id_usuario"] = $id_usuario;
	$_SESSION["session_nome_usuario"] = $nome_usuario;
	$_SESSION["session_login_usuario"] = $login_usuario;
	$_SESSION["session_status_usuario"] = $status_usuario;
		
	echo("<script language='JavaScript'>location='home.php';</script>");
}
?>