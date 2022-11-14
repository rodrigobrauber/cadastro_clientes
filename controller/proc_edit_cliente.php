<?php
	include_once("Dao.php"); 

	$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);

	$result_cliente = "UPDATE clientes SET nome='$nome', email='$email', telefone='$telefone' WHERE id='$id'";
	$resultado_cliente = mysqli_query($conexao, $result_cliente);

	header("Location: ../index.php");
?>