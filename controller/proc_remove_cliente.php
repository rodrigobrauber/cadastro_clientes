<?php
session_start();
include_once("Dao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_cliente = "DELETE FROM clientes WHERE id='$id'";
	$resultado_cliente = mysqli_query($conexao, $result_cliente);
	if(mysqli_affected_rows($conexao)){ 
		header("Location: ../index.php");
	}else{ 
		header("Location: ../index.php");
	}
}else{
	header("Location: ../index.php");
}
