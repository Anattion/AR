<?php
require_once "../PDO.php";

$nome = $_POST["InputNome"];
$email = $_POST["InputEmail"];
$senha = base64_encode($_POST["InputPassword"]);

$banco = new usePDO();

$banco->execSQL("INSERT INTO usuario (nome, email, senha) VALUES 
	('$nome', '$email', '$senha')", 'USER');

header("location: ../user.php?sucesso=s")

?>