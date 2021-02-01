<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>homer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<?php require_once 'conexao.php'; ?>
</head>
<body>
	<div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light"> NOVO CLIENTE </h3>
            <form method="post" action="inserir.php">
                <div class="input-field col s12">
                    <input type="text" name="nome" id="nome">
                    <label for="nome"> Nome </label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="email" id="email">
                    <label for="email"> E-mail</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="cpf" id="cpf" class="form-control cpf-mask" maxlength="14">
                    <label for="cpf"> CPF</label>
                </div>
                <div class="input-field col s12">
                    <input type="password" name="senha" id="senha">
                    <label for="senha"> Senha</label>
                </div>
                <button type="submit" name="bnt-cadastrar" class="btn">CADASTRAR</button>
            </form>

        </div>
    </div>

</body>
</html>