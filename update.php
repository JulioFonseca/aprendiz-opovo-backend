<?php
	//conexao com o banco
	require_once 'conexao.php';
	//iniciar a sessao para enviar a mensagem
	session_start();

	//verificar se o botao foi apertado 
	if(isset($_POST['btn-editar'] )){

		$nome = $_POST['nome'];
		$email = $_POST['email'];  	  
		$cpf = $_POST['cpf']; 
		$senha = $_POST['senha'];
		$id = $_POST['id'];

		if($nome != '' && $email != '' && $cpf != '' && $senha != '' ){
		$sql ="UPDATE clientes SET nome = '$nome', email = '$email', cpf = '$cpf', senha = '$senha' 
		WHERE id = '$id'";
		}else{

			header('Location: editar.php?id='.$id);
			  $_SESSION['mensagem'] = "ERRO!! preencha todos os campos";
		}


		if (mysqli_query($conn, $sql)) {
		      //echo "Cadastro realizado com sucesso";
		      header('Location: index.php');
		      $_SESSION['mensagem'] = "Atualizado com sucesso";
		} else {
		    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				header('Location: index.php');
			  $_SESSION['mensagem'] = "ERRO!! ao editar";

		}
	}
  ?>