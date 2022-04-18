<?php
require_once "../PDO.php";

$email = $_POST["username"];
$senha = trim($_POST["password"]);
$banco = new usePDO();
$result = $banco->execSQL("SELECT senha from usuario WHERE email = '$email'",'USER');
$aSenhas = $result->fetch();
for ($i=0; $i < count($aSenhas) ; $i++) { 
     $senha_banco = base64_decode($aSenhas[$i][0]);
}



if ( $senha = $senha_banco) {
//	header("location: ../index.php?sucesso=s");
} else {
//	header("location: ../login.php?error=".$senha_banco);
}
?>
