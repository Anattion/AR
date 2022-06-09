<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/login.css">	
	<title>Bem Vindo</title>
</head>
<body>
<div class="container">
	<section id="content">
		<form action="PDOForms/logarUser.php" method="POST">
			<h1>Login Form</h1>
			<div>
				<input type="email" placeholder="E-mail" required="" id="username" name="username" />
			</div>
			<div>
				<input type="password" placeholder="Senha" required="" id="password" name="password" />
			</div>
			<div>
				<input type="submit" value="Entrar" />
				<a href="user.php">Novo? Cadastre-se aqui</a>
			</div>
		</form><!-- form -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>