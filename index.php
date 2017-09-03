<?php
//Puxamos o autoload 
require_once("config.php");
require_once("modal.php"); 

$result = new Usuarios();

//Carrega linha de registro do banco de dados pelo ID.
//$result->carregaPeloId(2);
//echo $result;

//Carrega lista de usuários.
$result = Usuarios::carregaUsuarios();
$result = json_encode($result);
$result = json_decode($result);

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

	<title>Base Framework</title>

<!-- IMPORTANDO ESTILOS DATA TABLE-->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap4.min.css">

<!-- IMPORTANDO JS DATA TABLE-->  
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap4.min.js"></script>

<!-- INICIALIZANDO DATA TABLE E SETANDO CONFIGURAÇÕES--> 
<script type="text/javascript" language="javascript" class="init">
	$(document).ready( function () {
    	$('#table_id').DataTable({
    	
    	"language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Portuguese-Brasil.json"
            }

    	});
	} );
</script>

<script type="text/javascript" language="javascript" class="init">
	$(document).ready( function () {
    	$('#table_id2').DataTable({
    	
    	"language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Portuguese-Brasil.json"
            }

    	});
	} );
</script>

<style>
body {
	margin: 50px auto !important;
}
</style>

</head>
<body style="width: 50%;">

<h5>Cadastrar Usuário</h5>
<br>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastrarUsuario">Cadastrar</button>

<div class="modal fade" id="cadastrarUsuario" tabindex="-1" role="dialog" aria-labelledby="cadastrarUsuarioLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cadastrarUsuarioLabel">Cadastrar Usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="post.php" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Nome:</label>
            <input type="text" class="form-control" name="nome">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Login:</label>
            <input type="text" class="form-control" name="login" required>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Senha:</label>
            <input type="password" class="form-control" name="senha" required>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Data:</label>
            <input type="date" class="form-control" name="data" required>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Status:</label>
            <select name="status" class="form-control" required>
                <option value="0">ATIVO</option>
                <option value="1">INATIVO</option>
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<br><br><br>
<hr>
<br><br><br>


<h5>Tabela de Teste com Dados Fictícios</h5>
<br>

<table id="table_id" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Login</th>
            <th>Senha</th>
            <th>Data</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>

<br><br><br>
<hr>
<br><br><br>

<h5>Puxando dados do Banco - Tabela Usuários pelo Método Usuarios::carregaUsuarios();</h5>
<br>

<table id="table_id2" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Login</th>
			<th>Senha</th>
			<th>Data</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ( $result as $result ) { ?>
		<tr>
			<td><?php echo $result->id; ?></td>
			<td><?php echo $result->nome; ?></td>
			<td><?php echo $result->login; ?></td>
			<td><?php echo $result->senha; ?></td>
			<td>
				<?php
					$result->data = date("d/m/Y H:i:s", strtotime($result->data));
				 	echo $result->data; 
				?>			 	
			</td>
			<td>
				<?php 
					if($result->status == 0) {
						echo "INATIVO"; 
					}else{
						echo "ATIVO";
					}
				?>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>

</body>
</html>