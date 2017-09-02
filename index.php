<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

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

if ($result >= 1) {
    //$alerta = Alertas::usuarioCadastroAlert();
    $alerta = Alertas::usuarioUpdateAlert();
    //$alerta = Alertas::usuarioDeleteAlert();
}


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