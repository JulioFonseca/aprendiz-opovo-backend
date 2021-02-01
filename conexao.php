<?php

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "jornal";
	
	//Criar a conexao
	$conn = new mysqli($servidor, $usuario, $senha, $dbname);

	// verificar a conexao
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
} 

?>