<?php
	require_once "utils/cabecalho.php";
	session_start(); 
?>
<script>
	function AbrePagina(valor) {
		 window.open(("editarProduto.php?id=" + valor));
   }
</script>

		<main class = "consulta-produto">	
			<div class="btn-cadastra">
				<a href="produto.php" class="btn btn-dark" role="button" aria-pressed="true">Novo Produto</a>
			</div>	
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">Id</th>
			      <th scope="col">Descrição</th>
			      <th scope="col">Valor</th>
			      <th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
					<?php
						require_once "PDO.php";					
						$banco = new usePDO();
						$result = $banco->execSQL("SELECT * FROM Produto",'PROD');
						$vetor_resultado = ($result->fetchAll());					
						for ($i=0; $i < count($vetor_resultado) ; $i++) { 							
						echo "<tr onclick=AbrePagina(".$vetor_resultado[$i][0].")>
								<td>".$vetor_resultado[$i][0]."</td>
								<td>".$vetor_resultado[$i][1]."</td>
								<td>".$vetor_resultado[$i][3]."</td>
							</tr>";
						}	
						?>			  	
			  </tbody>
			</table>
		</main>

	</body>
</html>