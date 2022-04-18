<?php
require_once "../PDO.php";

$id = $_POST["inputId"];
$Descricao = $_POST["inputDescricao"];
$Valor = $_POST["InputValor"];
$Excluir = "";

if(isset($_POST['checkExcluir'])){
	$Excluir =$_POST['checkExcluir'];	
}


$banco = new usePDO();
$cSql = "";

if ($Excluir!="on") {
	$cSql = "UPDATE Produto SET descricao = '$Descricao', Valor = '$Valor' WHERE id='$id'";	
} else {
	$cSql = "DELETE from Produto where id = '$id'";	
}

$banco = new usePDO();
$banco->execSQL($cSql,'PROD');

header("location: ../listagemProdutos.php?sucesso=s");
?>