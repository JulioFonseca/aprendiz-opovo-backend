<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
	<?php require_once 'conexao.php'; session_start(); ?>
</head>
<body>
	<?php
			//exibir um toast com a mensagem apos o erro de cadastro
				if (isset($_SESSION['mensagem'])) {

					?>
					<script type="text/javascript">
						window.onload = function() {
							M.toast({
						html: '<?php echo $_SESSION['mensagem']; ?>'})
													}
					</script>
					<?php
				}
		//fechar a sessao para não aparecer a mensagem depois de atualizar a pagina
		session_unset();
	?>
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
                    <input type="text" name="cpf" id="cpf" class="form-control" maxlength="14">
                    <label for="cpf"> CPF</label>
                    <!-- mascara para o cpf -->
                        <script type="text/javascript">
                            $("#cpf").mask("000-000-000-00");
                        </script>
                </div>
                <div class="input-field col s12">
                    <input type="password" name="senha" id="senha">
                    <label for="senha"> Senha</label>
                </div>
                <button type="submit" name="btn-cadastrar" class="btn">CADASTRAR</button>
                <a href="index.php" class="btn green">CLIENTES</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>