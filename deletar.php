<?php
require_once 'conexao.php';
	session_start();

	//verificar se o botao foi apertado para que nao haja cadastros indevidos
	if(isset($_POST['btn-deletar'] )){
		$id = $_POST['id'];

		$sql ="DELETE FROM clientes WHERE id = '$id'";

		if (mysqli_query($conn, $sql)) {
		      header('Location: index.php');
		      $_SESSION['mensagem'] = "Deletado com sucesso ";
		} else {
				header('Location: index.php');
			  $_SESSION['mensagem'] = "ERRO!!";

		}
	}
?>