<?php
    require ("Dao.php");

    if (isset($_POST['enviarDados'])) {
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
        $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $nome_imagem = $_FILES['imagem']['name'];

        if (in_array($extensao, $formatosPermitidos)) {
            $pasta = "../upload/";
            $temporario = $_FILES['imagem']['tmp_name'];
            $novoNome = uniqid().".$extensao";
    
            if (move_uploaded_file($temporario, $pasta.$novoNome)) {
                $mensagem = "Cliente cadastrado com sucesso";
                
                $nome = $_POST['nome'];
                $email = $_POST['email']; 
                $telefone = $_POST['telefone'];   

                $params = array(
                    ':nome' => $nome, 
                    ':email' => $email, 
                    ':telefone' => $telefone, 
                    ':nome_imagem' => $nome_imagem,
                    ':path' => $novoNome
                );

                $sql = "INSERT INTO clientes (nome, email, telefone, nome_imagem, path ) 
                        VALUES (:nome, :email, :telefone, :nome_imagem, :path )
                ";    

                $stmt = $conn->prepare($sql);
                $stmt->execute($params);
                echo "<script> alert('Cliente cadastrado com sucesso.'); </script>
                    <meta http-equiv='refresh' content='0, url=../index.php'>
                ";

            }else{
                $mensagem = "Cadastro nao realizado, tente novamente.";
            }
    
        }else{ 
            $mensagem = "Formato de imagem inválido, tente novamente.";
        }
        echo $mensagem;
    }
?>
</body>
</html>