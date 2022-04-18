<?php
require_once "../PDO.php";

$email = $_POST["InputEmail"];
$senha = trim($_POST["InputPassword"]);
$banco = new usePDO();
$banco->execSQL("SELECT senha from usuario WHERE email = $email",'USER');

$senha_banco = trim(($result->fetchAll()));	
$senha_banco = base64_decode($senha_banco);

if ( $senha = $senha_banco) {
	header("location: ../login.php?sucesso=s");
} else {
	header("location: ../login.php?error=s");
}
?>