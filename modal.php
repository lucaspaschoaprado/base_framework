<?php require_once("classes/Database.php"); ?>

<!-- Cadastrado com sucesso! -->
<div class="modal fade" id="usuarioCadastroAlert" tabindex="-1" role="dialog" aria-labelledby="usuarioCadastroAlert" aria-hidden="true">
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
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- Alterado com sucesso! -->
<div class="modal fade" id="usuarioUpdateAlert" tabindex="-1" role="dialog" aria-labelledby="usuarioUpdateAlert" aria-hidden="true">
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
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- Excluído com sucesso! -->
<div class="modal fade" id="usuarioDeleteAlert" tabindex="-1" role="dialog" aria-labelledby="usuarioDeleteAlert" aria-hidden="true">
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
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>