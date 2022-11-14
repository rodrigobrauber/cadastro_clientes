<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $banco = "cadastro_clientes";
    $conn = new PDO('mysql:host=localhost;dbname=cadastro_clientes', "root", "");
    $conexao = mysqli_connect($host, $user, $pass, $banco);

    if (mysqli_connect_errno()) {
        die('Não foi possível conectar-se ao banco de dados: ' . mysqli_connect_error());
        exit();
    }
?>