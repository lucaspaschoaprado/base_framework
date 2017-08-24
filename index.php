<?php 
require_once("config.php"); 

$result = new Usuarios();

//Carrega linha de registro do banco de dados pelo ID.
//$result->carregaPeloId(ID AQUI);
//echo $result;


//Carrega lista de usuários.
//$result = Usuarios::carregaUsuarios();
//echo json_encode($result);


//Realiza uma busca de usuários pelo nome digitado.
//$result = Usuarios::buscaUsuarios("BUSCA AQUI");
//echo json_encode($result);


//Busca usuário validando login/senha.
//$login = "lucas";
//$senha = "123456";
//$result->validaLogin($login, $senha);
//echo $result;


//Insere novo usuário.
$result->setNomeUsuario("Cliente 01");
$result->setLoginUsuario("cliente01");
$result->setSenhaUsuario("cliente01");
$result->setStatusUsuario("1");

$result->inserirUsuario();

echo $result;

?>