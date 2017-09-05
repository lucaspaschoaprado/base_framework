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

//Carrega lista de usuários.
$carregaUsuarios = Usuarios::carregaUsuarios();
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title><?php echo $title; ?></title>

	<!-- INCLUDE DE SCRIPTS CSS, JS -->
	<?php require_once('scripts.php'); ?>

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

<!-- PUXANDO AQUI OS FORMULÁRIOS PARA CADASTRO, EDIÇÃO E EXCLUSÃO DE USUÁRIOS-->
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
						<th>Nível de Permissão</th>
						<th>Data</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ( $carregaUsuarios as $carregaUsuarios ) { ?>
					<tr>
						<td width="110px;" align="center">
						<?php $id_usuario = $carregaUsuarios["id"]; ?>
							<!-- BOTÃO EDITAR -->
							<a class="btn btn-primary btn-sm editarUsuario" data-toggle="modal" data-target="#editarUsuario" data-id="<?php echo $id_usuario; ?>" data-nome="<?php echo $carregaUsuarios["nome"]; ?>" data-login="<?php echo $carregaUsuarios["login"]; ?>" data-nivel="<?php echo $carregaUsuarios["nivel_permissao"]; ?>" title="Editar"><i class="fa fa-pencil text-white"></i></a>

							<!-- BOTÃO VISUALIZAR -->
							<a class="btn btn-success btn-sm visualizarUsuario" data-toggle="modal" data-target="#visualizarUsuario" data-id="<?php echo $id_usuario; ?>" title="Visualizar"><i class="fa fa-search text-white"></i></a>
							
							<!-- BOTÃO EXCLUIR -->
							<a class="btn btn-danger btn-sm alterarStatus" data-toggle="modal" data-target="#alterarStatus" data-id="<?php echo $id_usuario; ?>" title="Alterar Status"><i class="fa fa-refresh text-white"></i></a>
						</td>
						<td><?php echo $carregaUsuarios["id"]; ?></td>
						<td><?php echo $carregaUsuarios["nome"]; ?></td>
						<td><?php echo $carregaUsuarios["login"]; ?></td>
						<td>
							<?php 

								$nivel_permissao = $carregaUsuarios["nivel_permissao"];

								if($nivel_permissao == 1) {
									echo "<span class='badge badge-dark'>ADMINISTRADOR</span>"; 
								}elseif($nivel_permissao == 2){
									echo "<span class='badge badge-primary'>INTERMEDIÁRIO</span>"; 
								}elseif($nivel_permissao == 3){
									echo "<span class='badge badge-info'>BÁSICO</span>"; 
								}

							?>							
						</td>
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

<?php 
  //Rodapé
  require_once('footer.php');
?>

<script>
$(document).ready(function(){
  $("[data-target='#editarUsuario']").on("click", function(){
    var id_usuario = $(this).data("id");
    var nome = $(this).data("nome");
    var login = $(this).data("login");
    var nivel = $(this).data("nivel");
    $("#id_usuario").val(id_usuario);
    $("#nome").val(nome);
    $("#login").val(login);
    $("#nivel").val(nivel);
  });
});

$(document).ready(function(){
  $("[data-target='#visualizarUsuario']").on("click", function(){
    var id_usuario2 = $(this).data("id");
    $("#id_usuario2").val(id_usuario2);
  });
});

$(document).ready(function(){
  $("[data-target='#alterarStatus']").on("click", function(){
    var id_usuario3 = $(this).data("id");
    $("#id_usuario3").val(id_usuario3);
  });
});
</script>

</body>
</html>