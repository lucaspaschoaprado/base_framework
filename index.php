<?php
//Puxamos o autoload 
require_once("config.php"); 

$result = new Usuarios();

//Carrega linha de registro do banco de dados pelo ID.
//$result->carregaPeloId(ID AQUI);
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
            <th>First name</th>
            <th>Last name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
            <th>Extn.</th>
            <th>E-mail</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiger</td>
            <td>Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
            <td>5421</td>
            <td>t.nixon@datatables.net</td>
        </tr>
        <tr>
            <td>Garrett</td>
            <td>Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>2011/07/25</td>
            <td>$170,750</td>
            <td>8422</td>
            <td>g.winters@datatables.net</td>
        </tr>
        <tr>
            <td>Ashton</td>
            <td>Cox</td>
            <td>Junior Technical Author</td>
            <td>San Francisco</td>
            <td>66</td>
            <td>2009/01/12</td>
            <td>$86,000</td>
            <td>1562</td>
            <td>a.cox@datatables.net</td>
        </tr>
        <tr>
            <td>Thor</td>
            <td>Walton</td>
            <td>Developer</td>
            <td>New York</td>
            <td>61</td>
            <td>2013/08/11</td>
            <td>$98,540</td>
            <td>8327</td>
            <td>t.walton@datatables.net</td>
        </tr>
        <tr>
            <td>Finn</td>
            <td>Camacho</td>
            <td>Support Engineer</td>
            <td>San Francisco</td>
            <td>47</td>
            <td>2009/07/07</td>
            <td>$87,500</td>
            <td>2927</td>
            <td>f.camacho@datatables.net</td>
        </tr>
        <tr>
            <td>Serge</td>
            <td>Baldwin</td>
            <td>Data Coordinator</td>
            <td>Singapore</td>
            <td>64</td>
            <td>2012/04/09</td>
            <td>$138,575</td>
            <td>8352</td>
            <td>s.baldwin@datatables.net</td>
        </tr>
        <tr>
            <td>Zenaida</td>
            <td>Frank</td>
            <td>Software Engineer</td>
            <td>New York</td>
            <td>63</td>
            <td>2010/01/04</td>
            <td>$125,250</td>
            <td>7439</td>
            <td>z.frank@datatables.net</td>
        </tr>
        <tr>
            <td>Zorita</td>
            <td>Serrano</td>
            <td>Software Engineer</td>
            <td>San Francisco</td>
            <td>56</td>
            <td>2012/06/01</td>
            <td>$115,000</td>
            <td>4389</td>
            <td>z.serrano@datatables.net</td>
        </tr>
        <tr>
            <td>Jennifer</td>
            <td>Acosta</td>
            <td>Junior Javascript Developer</td>
            <td>Edinburgh</td>
            <td>43</td>
            <td>2013/02/01</td>
            <td>$75,650</td>
            <td>3431</td>
            <td>j.acosta@datatables.net</td>
        </tr>
        <tr>
            <td>Cara</td>
            <td>Stevens</td>
            <td>Sales Assistant</td>
            <td>New York</td>
            <td>46</td>
            <td>2011/12/06</td>
            <td>$145,600</td>
            <td>3990</td>
            <td>c.stevens@datatables.net</td>
        </tr>
        <tr>
            <td>Hermione</td>
            <td>Butler</td>
            <td>Regional Director</td>
            <td>London</td>
            <td>47</td>
            <td>2011/03/21</td>
            <td>$356,250</td>
            <td>1016</td>
            <td>h.butler@datatables.net</td>
        </tr>
        <tr>
            <td>Lael</td>
            <td>Greer</td>
            <td>Systems Administrator</td>
            <td>London</td>
            <td>21</td>
            <td>2009/02/27</td>
            <td>$103,500</td>
            <td>6733</td>
            <td>l.greer@datatables.net</td>
        </tr>
        <tr>
            <td>Jonas</td>
            <td>Alexander</td>
            <td>Developer</td>
            <td>San Francisco</td>
            <td>30</td>
            <td>2010/07/14</td>
            <td>$86,500</td>
            <td>8196</td>
            <td>j.alexander@datatables.net</td>
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