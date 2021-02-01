<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Editar</title>
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

        if (isset($_GET['id'])) {
        $id = mysqli_escape_string($conn, $_GET['id']);

        $sql = "SELECT * FROM clientes WHERE id = '$id'";
        $res = mysqli_query($conn, $sql);
        $escrever = mysqli_fetch_array($res);
    }
	?>
	<div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light"> ATUALIZAR CLIENTE </h3>
            <form method="post" action="update.php">
                <input type="hidden" name="id" id="id" value="<?php echo $escrever['id'] ?>">
                <div class="input-field col s12">
                    <input type="text" name="nome" id="nome" value="<?php echo $escrever['nome'] ?>">
                    <label for="nome"> Nome </label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="email" id="email" value="<?php echo $escrever['email'] ?>">
                    <label for="email"> E-mail</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="cpf" id="cpf" class="form-control" maxlength="14" value="<?php echo $escrever['cpf'] ?>">
                    <!-- mascara para o cpf -->
                        <script type="text/javascript">
                            $("#cpf").mask("000-000-000-00");
                        </script>

                    <label for="cpf"> CPF</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="senha" id="senha" value="<?php echo $escrever['senha'] ?>">
                    <label for="senha"> Senha</label>
                </div>
                <button type="submit" name="btn-editar" class="btn">ATUALIZAR</button>
                <a href="index.php" class="btn green">CLIENTES</a>
            </form>
        </div>
    </div>

</body>
</html>