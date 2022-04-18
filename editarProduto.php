<?php
	require_once "utils/cabecalho.php";
	session_start(); 
?>

		<main class="col-100 menu-urls">
			<br>
			<div class = "titulo">
				<H1> Manutenção Produtos </H1>	
			</div>					
			<br>
			<form action="PDOForms/EditarProduto.php" method="POST">
				<?php
						require_once "PDO.php";					
						$banco = new usePDO();
						$id = $_GET["id"];
						$result = $banco->execSQL("SELECT * FROM Produto WHERE id = $id",'PROD');
						$vetor_resultado = ($result->fetchAll());					

					for ($i=0; $i <count($vetor_resultado); $i++) { 
						echo "<div class=row>
								<div class=col-md-5>	

									<label for=inputId>Id</label>
									<input type=text class=form-control id=inputId name=inputId value=".$vetor_resultado[$i][0]." readonly>
								
									<label for=inputDescricao>Descrição</label>
									<input type=text class=form-control id=inputDescricao name=inputDescricao value=".$vetor_resultado[$i][2].">

										<label for=InputValor>Valor de Venda</label>
										<input type=float class=form-control id=InputValor name=InputValor value=".$vetor_resultado[$i][3].">
						  		    <div class=form-check>
									    <input type=checkbox class=form-check-input id=checkExcluir name = checkExcluir>
									    <label class=form-check-label for=exampleCheck1>Quero excluir esse produto</label>
									  </div>								
									  <button type='submit' class='btn btn-dark'>Confirmar</button>	
								</div>						
							</div>";		
					    }	
				 ?>
				<?php 
				if(isset($_GET["sucesso"])){
				echo "<br>";
				echo "<br>";					
				echo "<h3>Cadastro realizado com Sucesso </h3>";
				}
				?>				  
			</form>
		</main>
		<script scr="./js/imagem.js"></script>

  	</body>
</html>



