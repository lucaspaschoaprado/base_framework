<?php 

class Usuarios{

	//Puxamos as variáveis correspondentes as colunas do banco de dados.
	private $id_usuario;
	private $nome_usuario;
	private $login_usuario;
	private $senha_usuario;
	private $data_usuario;
	private $status_usuario;

	//Recebe o conteudo da variável.
	public function getIdUsuario(){
		return $this->id_usuario;
	}

	//Altera o conteúdo da variável.
	public function setIdUsuario($valor){
		$this->id_usuario = $valor;
	}

	//Recebe o conteudo da variável.
	public function getNomeUsuario(){
		return $this->nome_usuario;
	}

	//Altera o conteúdo da variável.
	public function setNomeUsuario($valor){
		$this->nome_usuario = $valor;
	}

	//Recebe o conteudo da variável.
	public function getLoginUsuario(){
		return $this->login_usuario;
	}

	//Altera o conteúdo da variável.
	public function setLoginUsuario($valor){
		$this->login_usuario = $valor;
	}

	//Recebe o conteudo da variável.
	public function getSenhaUsuario(){
		return $this->senha_usuario;
	}

	//Altera o conteúdo da variável.
	public function setSenhaUsuario($valor){
		$this->senha_usuario = $valor;
	}

	//Recebe o conteudo da variável.
	public function getDataUsuario(){
		return $this->data_usuario;
	}

	//Altera o conteúdo da variável.
	public function setDataUsuario($valor){
		$this->data_usuario = $valor;
	}

	//Recebe o conteudo da variável.
	public function getStatusUsuario(){
		return $this->status_usuario;
	}

	//Altera o conteúdo da variável.
	public function setStatusUsuario($valor){
		$this->status_usuario = $valor;
	}

	public function setarDados($dados){

		//Variáveis do banco de dados. Preencher exatamente como nas colunas do bd.
		$this->setIdUsuario($dados['id']);
		$this->setNomeUsuario($dados['nome']);
		$this->setLoginUsuario($dados['login']);
		$this->setSenhaUsuario($dados['senha']);
		$this->setDataUsuario(new DateTime($dados['data']));
		$this->setStatusUsuario($dados['status']);

	}


	//Abaixo criamos todos os modelos de querys possíveis para a tabela usuários.
	//Método para seleção por ID.
	public function carregaPeloId($id){

		$conecta = new Database();

		$resultados = $conecta->select("SELECT * FROM usuarios WHERE id = :ID", array(
			":ID"=>$id
		));

		//Agora vamos validar a consulta e ver se existe algum retorno.
		if (count($resultados) > 0) {
			
			$linha = $resultados[0];

			//Puxa o método setarDados com as colunas do banco de dados.
			$this->setarDados($linha);
		}

	}

	//Método para carregar todos os usuários da tabela "usuários".
	public static function carregaUsuarios(){

		$conecta = new Database();

		return $resultados = $conecta->select("SELECT * FROM usuarios ORDER BY nome ASC");
	}

	//Método da pesquisar usuários pelo nome.
	public static function buscaUsuarios($nome){

		$conecta = new Database();

		return $resultados = $conecta->select("SELECT * FROM usuarios WHERE nome LIKE :NOME_USUARIO ORDER BY nome ASC", array(

			":NOME_USUARIO"=>"%".$nome."%"

		));
	}

	//Método para buscar usuário validando o login/senha.
	public function validaLogin($login, $senha){

		$conecta = new Database();

		$resultados = $conecta->select("SELECT * FROM usuarios WHERE login = :LOGIN AND senha = :SENHA AND status = :STATUS", array(
			":LOGIN"=>$login,
			":SENHA"=>$senha,

			//1 = ATIVO - 0 = INATIVO
			":STATUS"=>1
		));

		//Agora vamos validar a consulta e ver se existe algum retorno, ou seja, se o login, senha e status do usuário existem e confirmam.
		if (count($resultados) > 0) {
			
			$linha = $resultados[0];

			//Puxa o método setarDados com as colunas do banco de dados.
			$this->setarDados($linha);

		}else{

			$alerta = Alertas::loginFailAlert();
			
		}
	}

	//Método para inserir dados no sistema com procedure retornando o valor inserido.
	public function inserirUsuario(){

		$conecta = new Database();

		$resultados = $conecta->select("CALL sp_usuarios_inserir(:NOME, :LOGIN, :SENHA, :STATUS)", array(
			":NOME"=>$this->getNomeUsuario(),
			":LOGIN"=>$this->getLoginUsuario(),
			":SENHA"=>$this->getSenhaUsuario(),
			":STATUS"=>$this->getStatusUsuario()
		));

		//Agora vamos validar a consulta e ver se existe algum retorno.
		if (count($resultados) > 0) {
			
			$linha = $resultados[0];

			//Puxa o método setarDados com as colunas do banco de dados.
			$this->setarDados($linha);

			echo "OK - Com Procedure";

		}else{
			throw new Exception("Error");
		}
	}

	//Método para inserir dados no sistema sem procedure.
	public function inserirUsuarioSemProcedure($nome, $login, $senha, $status){

		$conecta = new Database();

		$resultados = $conecta->query("INSERT INTO usuarios (nome, login, senha, status) VALUES (:NOME, :LOGIN, :SENHA, :STATUS)", array(

			":NOME"=>$nome,
			":LOGIN"=>$login,
			":SENHA"=>$senha,
			":STATUS"=>$status

		));
		
		if($resultados->rowCount() > 0){
		
			$alerta = Alertas::usuarioCadastroAlert();
		
		}else{
			
			$alerta = Alertas::usuarioErroAlert();
			throw new Exception("Error Processing Request");
		
		}

		return $resultados;

	}

	//Método para alterar usuário.
	public function alterarUsuario($nome, $login, $senha, $status){

		$this->setNomeUsuario($nome);
		$this->setLoginUsuario($login);
		$this->setSenhaUsuario($senha);
		$this->setStatusUsuario($status);

		$conecta = new Database();

		$resultados = $conecta->query("UPDATE usuarios SET nome = :NOME, login = :LOGIN, senha = :SENHA, status = :STATUS WHERE id = :ID", array(

			":ID"=>$this->getIdUsuario(),
			":NOME"=>$this->getNomeUsuario(),
			":LOGIN"=>$this->getLoginUsuario(),
			":SENHA"=>$this->getSenhaUsuario(),
			":STATUS"=>$this->getStatusUsuario()

		));
		
		if($resultados->rowCount() > 0){
		
			echo "Alterado com sucesso";
		
		}else{
		
			throw new Exception("Error Processing Request");
		
		}

		return $resultados;

	}

	//Método para excluir usuário.
	public function excluirUsuario(){

		$conecta = new Database();

		$resultados = $conecta->query("DELETE FROM usuarios WHERE id = :ID", array(

			":ID"=>$this->getIdUsuario()

		));
		
		if($resultados->rowCount() > 0){
		
			echo "Excluido com sucesso";
		
		}else{
		
			throw new Exception("Error Processing Request");
		
		}

		return $resultados;

	}

	//Aqui exibimos todo o conteúdo da consulta como array.
	public function __toString(){

		return json_encode(array(

			"id_usuario"=>$this->getIdUsuario(),
			"nome_usuario"=>$this->getNomeUsuario(),
			"login_usuario"=>$this->getLoginUsuario(),
			"senha_usuario"=>$this->getSenhaUsuario(),
			"data_usuario"=>$this->getDataUsuario()->format("d/m/Y H:i:s"),
			"status_usuario"=>$this->getStatusUsuario()

		));
	}

}

 ?>