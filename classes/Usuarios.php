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

			//Variáveis do banco de dados. Preencher exatamente como nas colunas do bd.
			$this->setIdUsuario($linha['id']);
			$this->setNomeUsuario($linha['nome']);
			$this->setLoginUsuario($linha['login']);
			$this->setSenhaUsuario($linha['senha']);
			$this->setDataUsuario(new DateTime($linha['data']));
			$this->setStatusUsuario($linha['status']);
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