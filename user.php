<?php
	require_once "utils/cabecalho.php";
	session_start(); 
?>
		<main class="col-100 menu-urls">
			<br>
			<div class = "titulo">
				<H1> Manutenção de Usuário </H1>	
			</div>					
			<br>
			<form action="PDOForms/cadastraUser.php" method="POST">

			  <div class="form-group col-md-5">
			    <label for="InputEmail">Endereço de email</label>
			    <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" name="InputEmail" placeholder="Seu email" onblur="buscar_email(this)">
			    <small id="emailHelp" class="form-text text-muted">Seu e-mail está seguro conosco, confia !</small>
			  </div>

			  <div class="form-group col-md-5">
			    <label for="InputNome">Nome</label>
			    <input type="text" class="form-control" id="InputNome" name="InputNome" size=10 placeholder="Seu email">		    
			  </div>		

			  <div class="form-group col-md-2">
			    <label for="InputPassword">Senha</label>
			    <input type="password" class="form-control" id="InputPassword" placeholder="Senha" name="InputPassword">
			  </div>
			  <br>
			  <button type="submit" class="btn btn-primary">Cadastrar</button>
				<?php 
				if(isset($_GET["sucesso"])){
					echo "<br>";
					echo "<br>";					
					echo "<h3>Cadastro realizado com Sucesso </h3>";
				}

				?>			  
			</form>
		</main>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script scr="js/scripts.js"></script>		
  	</body>
</html>