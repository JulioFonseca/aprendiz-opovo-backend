<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>homer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php 
		require_once 'conexao.php'; 
		$sql = "SELECT * FROM clientes";
				$res = mysqli_query($conn, $sql); 

				//if (mysqli_num_rows($res) > 0)
	?>
</head>
<body>
	<h3>Clientes</h3>
	<!--Tabela para READ Clientes-->
	<table align="center" border="1">
		<thead>
			<tr>
				<td>Nome</td>
				<td>email</td>
				<td>cpf</td>
				<td>senha</td>
			</tr>
		</thead>
				<?php 
			if (mysqli_num_rows($res) > 0) {
				while ($escrever = mysqli_fetch_array($res)) {
				
				?>
				<tbody>
			<tr>
				<td><?php echo $escrever['nome'] ?></td>
				<td><?php echo $escrever['email'] ?></td>
				<td><?php echo $escrever['cpf'] ?></td>
				<td><?php echo $escrever['senha'] ?></td>
			</tr>
		</tbody>
		<?php 			
						}
			}else {
		?>
		<tbody>
			<tr>
				<td>-----</td>
				<td>-----</td>
				<td>-----</td>
				<td>-----</td>
			</tr>
		</tbody>
		<?php 
			} 
	?>		
	</table>
	<br>
	<a href="cadastro.php" class="btn">CADASTRAR</a>

</body>
</html>