<?php
	require_once 'conexao.php';
	//recebendo os valores de cadastro.php e verificando se chegou na pagina apertando o button 
	if (isset($_POST['btn-cadastrar'])) {
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$cpf = $_POST['cpf'];
		$senha = $_POST['senha'];
		
		//inserindo o cliente no banco de dados
		$sql ="INSERT INTO clientes(nome, email, cpf, senha) VALUES('$nome','$email','$cpf','$senha')";

		//verificando se houve um erro no cadastro
		if (mysqli_query($conn, $sql)) {

			      echo "Cadastro realizado com sucesso";
		} else {

		      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			
		}
	}
  ?>