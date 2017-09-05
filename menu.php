<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php"><?php echo $title; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php"><i class="fa fa-home fa-fw text-white"></i> Início</a>
      </li>
      
      <!-- Só exibe o bloco do menu se o usuário for Administrador = 1 -->
      <?php if ($session_nivel_permissao_usuario == 1) {?>
        <li class="nav-item active">
          <a class="nav-link" href="usuarios.php"><i class="fa fa-users fa-fw text-white"></i> Usuários</a>
        </li>
      <?php } ?>
      
      <li class="nav-item active">
        <a class="nav-link" href="minha_conta.php">| <i class="fa fa-lock fa-fw text-white" style="margin-left: 10px;"></i> Minha Conta</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php"><i class="fa fa-arrow-right fa-fw text-white"></i> Sair</a>
      </li>
    </ul>
    <span class="navbar-text">
      <a class="text-white">
        <?php echo $session_nome_usuario; ?> | <?php echo $session_login_usuario;?> | <?php echo $session_data_entrada;?>
      </a>
    </span>
  </div>
</nav>