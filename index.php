<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href="favicon.ico">

    <title>Nome do Projeto</title> 

    <!-- Última versão CSS compilada e minificada -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Última versão JavaScript compilada e minificada -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- CSS da Página -->  
    <link rel="stylesheet" href="assets/css/login.css">
  </head>

  <body>

    <div class="container sections-wrapper">

      <form class="form-signin" action="login.php" method="POST">
        
        <h4 class="form-signin-heading" align="center">
        	<img src="assets/images/logo_projeto.png" width="140" /><br />
            
            Nome do Projeto
        </h4>
        
        <label for="Usuário" class="sr-only">Usuário</label>
        <input type="text" name="login" class="form-control" placeholder="Usuário" required autofocus autocomplete="off">
        
        <label for="Senha" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Senha" required autocomplete="off">

        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>

    </div>
  </body>
</html>
