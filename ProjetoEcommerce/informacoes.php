<?php 
	include ("classes/conexao.php");
?>


 <html>
 	<head>
 		<meta charset="utf-8">
 		<title>Informações do Produto</title>
 		<link rel="stylesheet" type="text/css" href="styles.css">
 	</head>
	<body>
	 	<?php  
			$codigo = $_GET['codigo'];
			$sql = "SELECT * FROM produtos WHERE codigo = '$codigo'";
			$resultado = $con->query($sql);

			if ($linha = $resultado->fetch_assoc()){
				echo "<div class = 'containerInfo'>";
					echo "<div class='divImagem'>";
						echo "<img src = 'data:image/jpeg;base64,".base64_encode($linha['foto'])."'/>";
					echo "</div>";
					echo "<div class = 'info'>";
						echo "Nome: ".$linha["nome"]."<br>";
						echo "Preço: R$".$linha["preco"]."<br>";
						echo "Quantidade em estoque: ".$linha["quantidade"]."<br>";
						echo "Altura do produto: ".$linha["altura"]."<br>";
						echo "Largura do produto: ".$linha["largura"]."<br>";
						echo "Profundidade do produto: ".$linha["profundidade"]."<br>";
						echo "Peso: ".$linha["peso"]."<br>";
						echo "Fabricante: ".$linha["fabricante"]."<br>";	
						echo "Codigo de barras: ".$linha["codigodebarras"]."<br>";
						echo "Descrição: ".$linha["descricao"]."<br>";		
					echo "</div>";	
				echo "</div>";
			}
		?>
 	</body>
 </html>