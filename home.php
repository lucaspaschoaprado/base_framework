<?php
//Puxamos o autoload 
require_once("config.php");
require_once("valida_login.php");
require_once("modal.php"); 

//Capturando os dados de sessão.
$session_id_usuario = $_SESSION["session_id_usuario"];
$session_nome_usuario = $_SESSION["session_nome_usuario"];
$session_login_usuario = $_SESSION["session_login_usuario"];
$session_nivel_permissao_usuario = $_SESSION["session_nivel_permissao_usuario"];
$session_data_entrada = $_SESSION["session_data_entrada"];

//Setando qual o nível de permissão necessário para acessar a página.
$nivelPermissao = Permissoes::nivelPermissaoBasico();

//Instanciando a Classe Usuários.
//$result = new Usuarios();

//Carrega linha de registro do banco de dados pelo ID.
//$result->carregaPeloId(1);
//$carregaPeloId = json_decode($result, true);
//echo $carregaPeloId["id_usuario"];

//Carrega lista de usuários.
//$carregaUsuarios = Usuarios::carregaUsuarios();
//$carregaUsuarios = json_encode($carregaUsuarios);
//$carregaUsuarios = json_decode($carregaUsuarios, true);

//Realiza uma busca de usuários pelo nome digitado.
//$result = Usuarios::buscaUsuarios("BUSCA AQUI");
//echo json_encode($result);


//Busca usuário validando login/senha.
//$login = "lucas";
//$senha = "123456";
//$result->validaLogin($login, $senha);
//echo $result;


//Insere novo usuário COM procedure.
//$result->setNomeUsuario("Cliente 01");
//$result->setLoginUsuario("cliente01");
//$result->setSenhaUsuario("cliente01");
//$result->setStatusUsuario("1");
//$result->inserirUsuario();
//echo $result;


//Insere novo usuário SEM procedure.
//$nome = "Cliente 02";
//$login = "cliente02";
//$senha = "cliente02";
//$status = "1";
//$result->inserirUsuarioSemProcedure($nome, $login, $senha, $status);
//echo json_encode($result);


//Alterar dados do usuário.
//$result->carregaPeloId(1);
//$nome = "Lucas Prado";
//$login = "lucasprado";
//$senha = "123456";
//$status = "1";
//$result->alterarUsuario($nome, $login, $senha, $status);
//echo $result;


//Excluir usuário.
//$result->carregaPeloId(54);
//$result->excluirUsuario();
//echo $result;
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title><?php echo $title; ?></title>

  <!-- INCLUDE DE SCRIPTS CSS, JS -->
	<?php require_once('scripts.php'); ?>

</head>

<body>

<?php  require_once('menu.php'); ?>

<section id="conteudo">
<div class="row">
	<div class="card-bg">
	    <div class="card">
          <div class="card-header">
            Seja bem vindo
          </div>
          <div class="card-body">
            
          </div>
        </div>
    </div>
</div>
</section>

<?php 
  //Rodapé
  require_once('footer.php');
?>

</body>
</html>