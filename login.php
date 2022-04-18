<?php
	require_once "utils/cabecalho.php";
?>
		<main class="col-100 menu-urls">
			<br>
			<div class = "titulo">
				<H1> Login </H1>	
			</div>					
			<br>
			<form action="PDOForms/LogarUser.php" method="POST">
			  	<div class="form-group col-md-3">
			    	<label for="InputEmail">Endereço de email</label>
				    <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" name="InputEmail" placeholder="Seu email">
			  	</div>
			  	<div class="form-group col-md-2">
			    	<label for="InputPassword">Senha</label>
			    	<input type="password" class="form-control" id="InputPassword" placeholder="Senha" name="InputPassword">
			  	</div>
			  	<br>
			  	<button type="submit" class="btn btn-primary">Logar</button>
				<?php 
				if(isset($_GET["sucesso"])){
					echo "<br>";
					echo "<br>";					
					echo "<h3>Login realizado com Sucesso </h3>";
				} else {
					if(isset($_GET["error"])){
						echo "<br>";
						echo "<br>";					
						echo "<h3>Erro ao logar - Verifique as informações </h3>";
					}
				}

				?>					  	
			</form>  	
		</main>	
 	</body>
</html>