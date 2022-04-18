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
			<form action="PDOForms/cadastrarProduto.php" method="POST">

				<div class="row">
					<div class="col-md-6">
						<label for="inputDescricao">Descrição</label>
						<input type="text" class="form-control" id="inputDescricao" placeholder="" name="inputDescricao">
						<label for="InputTitulo">Título do Produto</label>
						<textarea class="form-control" id="InputTitulo" name="InputTitulo" rows="3"></textarea>
						<div class="col-md-3">	
							<label for="InputValor">Valor de Venda</label>
							<input type="float" class="form-control" id="InputValor" name="InputValor">			  
						</div>
						<div class="col-md-8">
							<button type="submit" class="btn btn-primary">Cadastrar</button>						
						</div>
					</div>						
					<div class="col-md-3">
					    <div class="max-width">
					        <div class="imageContainer">
					            <img src="camera.png" alt="Selecione uma imagem" id="imgPhoto">
					        </div>
					    </div>

					    <input type="file" id="flImage" name="fImage" accept="image/*">			    
					</div>
				</div>		

				<?php 
				if(isset($_GET["sucesso"])){
				echo "<br>";
				echo "<br>";					
				echo "<h3>Cadastro realizado com Sucesso </h3>";
				}

				?>			  
				</div>	
			</form>
		</main>
		<script scr="./js/imagem.js"></script>

  	</body>
</html>