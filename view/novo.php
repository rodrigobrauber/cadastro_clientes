<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Clientes: </title>
        <link rel="stylesheet" text="text/css" href="estilo.css">
    </head>
    <body>
        <div id="cadastro">
            <form name="signup" enctype="multipart/form-data" method="post" action="../controller/cadastro.php">
                <table id="tab_cadastro">
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="nome" required placeholder="Nome do Cliente" id="nome" class="txt" /></td>
                    </tr>
                    <tr>    
                        <td>E-mail:</td>
                        <td><input type="text" name="email" required placeholder="E-mail do Cliente" id="email" class="txt" /></td>
                    </tr>
                    <tr>    
                        <td>Telefone:</td>
                        <td><input type="text" name="telefone" required placeholder="Telefone do Cliente" id="telefone" class="txt" /></td>
                    </tr> 
                    <tr>    
                        <td>Foto:</td>
                        <td><input type="file" name="imagem" required id="imagem" class="txt" /></td>
                    </tr>
                    <tr>    
                        <td colspan="2">
                            <input type="submit" value="Cadastrar" name="enviarDados" id="botao_cad">
                            <a href="../index.php"> Voltar</a>
                        </td> 
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>

