<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<?php 
		//abrindo sessao para se comunicar entre os codigos
		session_start();
		//conexao com o banco de dados
		require_once 'conexao.php'; 
		$sql = "SELECT * FROM clientes";
				$res = mysqli_query($conn, $sql); 
				//exibir um toast com a mensagem apos o cadastro
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
</head>
<body>
	<h2 align="center" class="light">Área do administrador</h2>
	<div class="row">
		<div class="col s12 m8 push-m2">
			<h4 class="light">Clientes</h4>
	<!--Tabela para READ Clientes-->
	<table>
		<thead>
			<tr>
				<th>Nome</th>
				<th>email</th>
				<th>cpf</th>
				<th>senha</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
			<tbody>
				<?php 
				//comando para imprimir todos os clientes do banco de dados
			if (mysqli_num_rows($res) > 0) {
				while ($escrever = mysqli_fetch_array($res)) {
				
				?>		
			<tr>
				<td><?php echo $escrever['nome'] ?></td>
				<td><?php echo $escrever['email'] ?></td>
				<td><?php echo $escrever['cpf'] ?></td>
				<td><?php echo $escrever['senha'] ?></td>
				<!-- botao de editar e excluir -->
				<td> <a href="editar.php?id=<?php echo $escrever['id'] ?>" class='btn-floating orange'><i class='material-icons'>edit</i></a></td>
				<td> <a href="#modal<?php echo $escrever['id'] ?>" class='btn-floating red modal-trigger'><i class='material-icons'>delete</i></a></td>

				<!-- Estrutura Modal -->
                        <div id="modal<?php echo $escrever['id'] ?>" class="modal">
                            <div class="modal-content">
                                <h4>OPA!</h4>
                                <p>Tem certeza que deseja excluir esse cliente?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="deletar.php" method="post">
                                    <!-- formulario para mandar a informaçao ao deletar.php -->
                                    <input type="hidden" name="id" value="<?php echo $escrever['id'] ?>">
                                    <button type="submit" name="btn-deletar" class="btn red">Deletar</button>
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                </form>
                            </div>
                        </div>
			</tr>
		<?php 			
						}
			}else {
		?>
			<tr>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
			</tr>		
		<?php 
			} 
	?>
		</tbody>		
	</table>
	<br>
	<a href="cadastro.php" class="btn">CADASTRAR</a>
		</div>
	</div>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>