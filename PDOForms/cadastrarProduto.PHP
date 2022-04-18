<?php
require_once "../PDO.php";

$Descricao = $_POST["inputDescricao"];
$Titulo = $_POST["InputTitulo"];
$Valor = $_POST["InputValor"];
$banco = new usePDO();

$banco->execSQL("INSERT INTO Produto (Descricao, Titulo, Valor) VALUES 
	('$Descricao', '$Titulo', '$Valor')", 'PROD');

header("location: ../listagemProdutos.php?sucesso=s")

?>