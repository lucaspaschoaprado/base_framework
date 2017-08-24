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

		$resultados = $conecta->select("SELECT * FROM usuarios WHERE login = :LOGIN AND senha = :SENHA", array(
			":LOGIN"=>$login,
			":SENHA"=>$senha
		));

		//Agora vamos validar a consulta e ver se existe algum retorno.
		if (count($resultados) > 0) {
			
			$linha = $resultados[0];

			//Puxa o método setarDados com as colunas do banco de dados.
			$this->setarDados($linha);

		}else{

			throw new Exception("Login e/ou senha inválidos.");
			
		}
	}

	//Método para inserir dados no sistema.
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

		}
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