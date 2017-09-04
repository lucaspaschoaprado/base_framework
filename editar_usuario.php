<div class="modal fade" id="editarUsuario" tabindex="-1" role="dialog" aria-labelledby="editarUsuarioLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editarUsuarioLabel">Editar Usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Nome:</label>
            <input type="text" class="form-control something" name="nome" id="nome">
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
            <label for="recipient-name" class="form-control-label">Nível de Permissão:</label>
            <select name="nivel_permissao" class="form-control" aria-describedby="nivel_permissao" required>
                <option></option>
                <option value="1">ADMINISTRADOR</option>
                <option value="2">INTERMEDIÁRIO</option>
                <option value="3">BÁSICO</option>
            </select>
            <small id="nivel_permissao" class="form-text text-muted">
              Administrador - Cadastro, Edição, Exclusão, Visualização e Backup.
              <br />
              Intermediário - Cadastro, Edição, Visualização.
              <br />
              Básico - Visualização.
            </small>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Status:</label>
            <select name="status" class="form-control" required>
                <option value="1">ATIVO</option>
                <option value="0">INATIVO</option>
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Confirmar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>