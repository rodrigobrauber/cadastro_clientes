<?php 
	include_once("../controller/Dao.php");
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$result_cliente = "SELECT * from clientes where id = '$id'";
	$resultado_clientes = mysqli_query($conexao, $result_cliente); 
	$row_cliente = mysqli_fetch_assoc($resultado_clientes);         
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Clientes</title>
		<link rel="stylesheet" text="text/css" href="estilo.css">
	</head>
	<body>		
		<div id="cadastro">
			<form method="POST" action="../controller/proc_edit_cliente.php">
				<table id="tab_cadastro">
					<tr>				
						<input type="hidden" name="id" value="<?php echo $row_cliente['id']; ?>">
						<td>Nome:</td>
						<td><input class="txt" type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_cliente['nome']; ?>"></td>
					</tr>
					<tr>				
						<td>Email:</td>
						<td><input class="txt" type="text" name="email" placeholder="Digite o email completo" value="<?php echo $row_cliente['email']; ?>"></td>
					</tr>
					<tr>				
						<td>Telefone:</td>
						<td><input class="txt" type="text" name="telefone" placeholder="Digite o telefone completo" value="<?php echo $row_cliente['telefone']; ?>"></td>
					</tr>							
					<tr>    
						<td colspan="2"><input type="submit" value="Editar" id="botao_cad">
						<a href="../index.php"> Voltar</a></td>						
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>