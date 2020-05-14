<?php 
	include("classes/conexao.php");
?>
<html>
	<head>
		<title>E-commerce :D</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<meta charset="utf8">
	</head>
	<body>
		<form action="classes/registrarProduto.php" method="POST" enctype ="multipart/form-data">
			<div>
				<label for="nome">Nome do Produto:</label>
				<input type="text" name="nome">
				<br>
			</div>

			<div>
				<label for="preco">Preço:</label> 
				<input type="number" name="preco">
				<br>
			</div>

			<div>
				<label for="quantidade">Quantidade:</label>
				<input type="number" name="quantidade">
				<br>
			</div>

			<div>
				<label for="altura">Altura:</label>
				<input type="number" name="altura">
				<br>
			</div>

			<div>
				<label for="largura">Largura:</label>
				<input type="number" name="largura">
				<br>
			</div>

			<div>
				<label for="profundidade">Profundidade:</label>
				<input type="number" name="profundidade"> 
				<br>
			</div>

			<div>
				<label for="peso">Peso:</label> 
				<input type="number" name="peso">
				<br>
			</div>

			<div>
				<label for="fabricante">Fabricante:</label>
				<input type="text" name="fabricante"> 
				<br>
			</div>

			<div>
				<label for="codigodebarras">Codigo De Barras:</label> 
				<input type="number" name="codigodebarras">
				<br>
			</div>

			<div>
				<label for="descricao">Descrição:</label>
				<textarea name="descricao"></textarea>
				<br>
			</div>

			<div>
				<label for="foto">Foto do Produto:</label>
				<input type="file" required name="foto">
				<br>
			</div>
			
			<div>
				<button type="submit">Vender Produto!</button>
			</div>
		</form>
		<?php  
			$sql = "SELECT * FROM produtos ORDER BY codigo";
			$resultado = $con->query($sql);
			$num_linhas = mysqli_num_rows($resultado);

			if($num_linhas > 0){
				while($linha = mysqli_fetch_assoc($resultado)){
					echo "<div class = 'cards'>";
					echo "<img src='data:image/jpeg;base64,".base64_encode($linha['foto'])."'/>";
					echo $linha["nome"]."<br>";
					echo "R$ ". $linha["preco"]."<br>";
					echo "<a href= informacoes.php?codigo=".$linha['codigo']."/> <input type = 'button' class = 'cards' value = 'ver mais!'> </a>";
					echo "</div>";
				}	
			}
			else {
					echo "<h4 style='width:100px; margin: 0 auto;text-align: center;'>Produtos esgotados!</h4>";
				}




		?>
	</body>
</html>