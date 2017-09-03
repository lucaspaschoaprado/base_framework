<?php

$title = "Título do Sistema";

class Database extends PDO{

	//Dados para conexão com banco de dados.
	private $conexao;
	private $host = "localhost";
	private $db = "base_framework";
	private $user = "root";
	private $senha = "";

	//Construtor para executar a conexão automaticamente quando a classe foi instanciada.
	public function __construct(){
		$this->conexao = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->senha);
	}


	//Criamos um foreach para setar os parametros de cada item na query. EX: id, nome, login.
	private function setParametros($statement, $parametros = array()){

		foreach ($parametros as $key => $value) {
			
			$this->setParametro($statement, $key, $value);

		}
	}

	//Cada item na query recebe sua respectiva constante e variável. EX: :ID = $id, :NOME = $nome.
	private function setParametro($statement, $key, $value){
		$statement->bindParam($key, $value);
	}

	//Criando a query. EX: SELECT * FROM...
	public function query($queryBruta, $parametro = array()){

		$stmt = $this->conexao->prepare($queryBruta);
		
		$this->setParametros($stmt, $parametro);

		$stmt->execute();

		return $stmt;

	}

	//Montanmos o select para selecionar dados do banco de dados.
	public function select($queryBruta, $parametro = array()){

		$stmt = $this->query($queryBruta, $parametro);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}
}
?>