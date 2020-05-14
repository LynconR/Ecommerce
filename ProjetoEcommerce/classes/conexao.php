<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "ecommerce";

	// Create connection
	$con = new mysqli($host, $usuario, $senha, $banco);
	// Check connection
	if ($con->connect_errno) {
	  echo "falha na conexão (". $con->connect_errno . ")" . $con->connect_error;
	} 
?>