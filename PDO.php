<?php
class usePDO{
	private $dbname = "banco_de_pessoas";
	private $servername = "localhost";
	private $username = "root";
	private $password = "";

	private function connection(){
		try{
			$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return($conn);
		}
		catch(PDOException $e){
			echo "Erro de conexão".$e->getMessage();
			exit();
		}

	}

	private function createTbUser(){
		try{
			$cnx = $this->connection();
			$sql = "CREATE TABLE IF NOT EXISTS usuario(
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				nome VARCHAR(50) NOT NULL,
				senha VARCHAR(65) NOT NULL,
				email VARCHAR(50) NOT NULL)";

				$cnx->exec($sql);
				return $cnx; 
		}
		catch(PDOException $e){
			echo "Falha ao Criar Tabela: ".$e->getMessage()	;
			exit();	
			
		}
	}

	private function createTbProduto(){
		try{
			$cnx = $this->connection();
			$sql = "CREATE TABLE IF NOT EXISTS Produto(
				Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				Descricao VARCHAR(150) NOT NULL,
				Titulo VARCHAR(150) NOT NULL,
				Valor float NOT NULL,
				Imagem VARCHAR(64) NOT NULL)";

				$cnx->exec($sql);
				return $cnx; 
		}
		catch(PDOException $e){
			echo "Falha ao Criar Tabela: ".$e->getMessage()	;
			exit();	
			
		}
	}

	function execSQL($sql, $tipo){
		try{
			switch ($tipo)	{
				case "USER" :
					$cnx = $this->createTbUser();
					break;
				case "PROD" :	
					$cnx = $this->createTbProduto();
					break;
			}			
			$result = $cnx->query($sql);
			return $result;

		}
		catch(PDOException $e){
			echo "Falha ao executar SQL: ".$e->getMessage()	;
			exit();	
		

		}
	}
}	

?>
