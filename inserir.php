<?php
	require_once 'conexao.php';

	//iniciando a sessao para mandar mensagem de erro ou de sucesso
	session_start();

	//recebendo os valores de cadastro.php e verificando se chegou na pagina apertando o button 
	if (isset($_POST['btn-cadastrar'])) {
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$cpf = $_POST['cpf'];
		$senha = $_POST['senha'];

		//verificando se o campo está vazio
		if($nome != '' && $email != '' && $cpf != '' && $senha != '' ){
			
		//inserindo o cliente no banco de dados
		$sql ="INSERT INTO clientes(nome, email, cpf, senha) VALUES('$nome','$email','$cpf','$senha')";
		}else{
			//caso houver error redirecionar para cadastro.php com mensagem de erro
			header('Location: cadastro.php');
			  $_SESSION['mensagem'] = "ERRO!! preencha todos os campos";
		}

		//verificando se houve um erro no cadastro
		if (mysqli_query($conn, $sql)) {  
			    header('Location: index.php');
		      	$_SESSION['mensagem'] = "cadastrado com sucesso";
		} else {
				header('Location: index.php');
			  	$_SESSION['mensagem'] = "ERRO!! ao se cadastrar";
			
		}
	}
  ?>