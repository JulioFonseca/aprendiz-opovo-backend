<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php 
	//abrindo sessao para se comunicar entre os codigos
		session_start();

		require_once 'conexao.php'; 
		$sql = "SELECT * FROM clientes";
				$res = mysqli_query($conn, $sql); 

				if (isset($_SESSION['mensagem'])) {

					?>
		<script type="text/javascript">
			window.onload = function() {
				M.toast({
					html: '<?php echo $_SESSION['mensagem']; ?>'
				})
			}
		</script>
	<?php
				}
		session_unset();
	?>
</head>
<body>
	<div class="row">
		<div class="col s12 m8 push-m2">
			<h3 class="light">Clientes</h3>
	<!--Tabela para READ Clientes-->
	<table class='striped'>
		<thead>
			<tr>
				<th>Nome</th>
				<th>email</th>
				<th>cpf</th>
				<th>senha</th>
			</tr>
		</thead>
			<tbody>
				<?php 
			if (mysqli_num_rows($res) > 0) {
				while ($escrever = mysqli_fetch_array($res)) {
				
				?>		
			<tr>
				<td><?php echo $escrever['nome'] ?></td>
				<td><?php echo $escrever['email'] ?></td>
				<td><?php echo $escrever['cpf'] ?></td>
				<td><?php echo $escrever['senha'] ?></td>
				<!-- botao de editar e excluir -->
				<td><?php echo $escrever['senha'] ?></td>
				<td><?php echo $escrever['senha'] ?></td>
			</tr>
		<?php 			
						}
			}else {
		?>
			<tr>
				<td>-----</td>
				<td>-----</td>
				<td>-----</td>
				<td>-----</td>
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
</body>
</html>