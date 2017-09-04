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
$nivelPermissao = Permissoes::nivelPermissaoAdministrador();

//Instanciando a Classe Usuários.
$result = new Usuarios();

//Carrega linha de registro do banco de dados pelo ID.
//$result->carregaPeloId(1);
//$carregaPeloId = json_decode($result, true);
//echo $carregaPeloId["id_usuario"];

//Carrega lista de usuários.
$carregaUsuarios = Usuarios::carregaUsuarios();
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

	<?php require_once('includes.php'); ?>

	<!-- INICIALIZANDO DATA TABLE E SETANDO CONFIGURAÇÕES--> 
	<script type="text/javascript" language="javascript" class="init">
		$(document).ready( function () {
	    	$('#table_id2').DataTable({
	    	
	    	"language": {
	                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Portuguese-Brasil.json"
	            }

	    	});
		} );
	</script>

<!-- PUXANDO AQUI OS FORMULÁRIOS PARA CADASTRO, EDIÇÃO E EXLCUSÃO DE USUÁRIOS-->
<?php require_once('cadastrar_usuario.php'); ?>
<?php require_once('editar_usuario.php'); ?>
<?php require_once('excluir_usuario.php'); ?>
<?php require_once('visualizar_usuario.php'); ?>

</head>

<body>

<?php  require_once('menu.php'); ?>

<section id="conteudo">
<div class="row">
	<div class="card-bg">
	    <div class="card">
          <div class="card-header">
            Painel de Usuários
          </div>
          <div class="card-body">
            <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#cadastrarUsuario"><i class="fa fa-check text-white"></i> Cadastrar Usuário</button>
            <br><br>

			<table id="table_id2" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th width="110px;"></th>
						<th>ID</th>
						<th>Nome</th>
						<th>Login</th>
						<th>Senha</th>
						<th>Data</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ( $carregaUsuarios as $carregaUsuarios ) { ?>
					<tr>
						<td width="110px;" align="center">
							<!-- BOTÃO EDITAR -->
							<a class="btn btn-primary btn-sm editarUsuario" data-id="1" data-toggle="modal" data-target="#editarUsuario" title="Editar"><i class="fa fa-pencil text-white"></i></a>

							<!-- BOTÃO VISUALIZAR -->
							<a class="btn btn-success btn-sm" data-toggle="modal" data-target="#visualizarUsuario" title="Visualizar"><i class="fa fa-search text-white"></i></a>
							
							<!-- BOTÃO EXCLUIR -->
							<a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#excluirUsuario" title="Alterar Status"><i class="fa fa-refresh text-white"></i></a>
						</td>
						<td><?php echo $carregaUsuarios["id"]; ?></td>
						<td><?php echo $carregaUsuarios["nome"]; ?></td>
						<td><?php echo $carregaUsuarios["login"]; ?></td>
						<td><?php echo $carregaUsuarios["senha"]; ?></td>
						<td>
							<?php
								$carregaUsuarios["data"] = date("d/m/Y H:i:s", strtotime($carregaUsuarios["data"]));
							 	echo $carregaUsuarios["data"]; 
							?>			 	
						</td>
						<td>
							<?php 
								if($carregaUsuarios["status"] == 0) {
									echo "<span class='badge badge-danger'>INATIVO</span>"; 
								}else{
									echo "<span class='badge badge-success'>ATIVO</span>"; 
								}
							?>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
          </div>
        </div>
    </div>
</div>
</section>

<script type="text/javascript">
	


</script>

</body>
</html>