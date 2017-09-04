<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<?php require_once("classes/Database.php"); ?>

<!-- ************************************************************************************************************** -->
<!-- ALERTAS DA CLASSE USUARIOS -->

<!-- Cadastrado com sucesso! -->
<div class="modal fade bg-primary" id="usuarioCadastroAlert" tabindex="-1" role="dialog" aria-labelledby="usuarioCadastroAlert" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="usuarioCadastroAlert"><?php echo $title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" align="center">
        <b>CADASTRADO COM SUCESSO</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="window.location.href='home.php'">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- Alterado com sucesso! -->
<div class="modal fade bg-primary" id="usuarioUpdateAlert" tabindex="-1" role="dialog" aria-labelledby="usuarioUpdateAlert" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="usuarioUpdateAlert"><?php echo $title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" align="center">
        <b>ALTERADO COM SUCESSO</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="window.location.href='home.php'">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- Excluído com sucesso! -->
<div class="modal fade bg-primary" id="usuarioDeleteAlert" tabindex="-1" role="dialog" aria-labelledby="usuarioDeleteAlert" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="usuarioDeleteAlert"><?php echo $title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" align="center">
        <b>EXCLUÍDO COM SUCESSO</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="window.location.href='home.php'">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- ERRO - OPERAÇÃO NÃO CONCLUÍDA -->
<div class="modal fade bg-danger" id="usuarioErroAlert" tabindex="-1" role="dialog" aria-labelledby="usuarioErroAlert" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="usuarioErroAlert"><?php echo $title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" align="center">
        <b>ERRO - OPERAÇÃO CANCELADA!</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="window.location.href='home.php'">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- ERRO - LOGIN E/OU SENHA INCORRETOS! -->
<div class="modal fade bg-danger" id="loginFailAlert" tabindex="-1" role="dialog" aria-labelledby="loginFailAlert" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginFailAlert"><?php echo $title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" align="center">
        <b>ERRO!<br />LOGIN E/OU SENHA INCORRETOS, OU CONTA DESATIVADA.</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- ERRO - ACESSO NEGADO, EFETUE LOGIN NOVAMENTE! -->
<div class="modal fade bg-danger" id="acessoNegadoAlert" tabindex="-1" role="dialog" aria-labelledby="acessoNegadoAlert" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="acessoNegadoAlert"><?php echo $title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" align="center">
        <b>ERRO!<br />ACESSO NEGADO, EFETUE LOGIN NOVAMENTE.</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- FIM DOS ALERTAS DA CLASSE USUARIOS -->
<!-- ************************************************************************************************************** -->