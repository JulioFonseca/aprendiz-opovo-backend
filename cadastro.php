<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>homer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php require_once 'conexao.php'; ?>
</head>
<body>
	<h3 align="center">Cadastrar</h3>

		<form method="post" action="inserir.php">
			<h4>nome</h4>
			<input type="text" name="nome">
			<h4>email</h4>
			<input type="text" name="email">
			<h4>cpf</h4>
			<input type="text" name="cpf">
			<h4>senha</h4>
			<input type="password" name="senha">
			<br>
			<button type="submit" name="btn-cadastrar">cadastrar</button>
		</form>

</body>
</html>