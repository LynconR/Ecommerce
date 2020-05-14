<?php include("conexao.php");

	$nome = $_POST ['nome'];
	$preco = $_POST ['preco'];
	$quantidade = $_POST ['quantidade'];
	$descricao = $_POST ['descricao'];
	$altura = $_POST ['altura'];
	$largura = $_POST ['largura'];
	$profundidade = $_POST ['profundidade'];
	$peso = $_POST ['peso'];
	$fabricante = $_POST ['fabricante'];
	$codigodebarras = $_POST ['codigodebarras'];

	$foto =	(file_get_contents($_FILES['foto']['tmp_name']));
	$foto = addslashes($foto);
	$sql = "INSERT INTO produtos (codigo, nome, preco, quantidade, descricao, altura, largura, profundidade, peso, fabricante, codigodebarras, foto) VALUES (null, '$nome', '$preco', '$quantidade', '$descricao', '$altura', '$largura', '$profundidade', '$peso', '$fabricante','$codigodebarras', '$foto')";

	$con->query($sql) or die ("algo deu errado!");
	$con->close();
	header('Location: ../index.php');
?>