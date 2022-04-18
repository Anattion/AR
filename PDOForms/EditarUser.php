<?php
require_once "../PDO.php";

$id = $_POST["inputId"];
$Nome = $_POST["inputNome"];
$Email = $_POST["InputEmail"];
$Excluir = "";

if(isset($_POST['checkExcluir'])){
	$Excluir =$_POST['checkExcluir'];	
}



$banco = new usePDO();
$cSql = "";

if ($Excluir!="on") {
	$cSql = "UPDATE Usuario SET nome = '$Nome', email = '$Email' WHERE id='$id'";	
} else {
	$cSql = "DELETE from Usuario where id = '$id'";	
}

$banco = new usePDO();
$banco->execSQL($cSql,'PROD');

header("location: ../listagemUsers.php?sucesso=s");
?>