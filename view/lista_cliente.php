<?php
    require_once './controller/Dao.php';
    $resultado = "select * from clientes";
    $resultado_clientes = mysqli_query($conexao, $resultado); 
?>

<div class="container">
    <h2>Manutenção de Clientes</h2>
    <a href="./view/novo.php" class="btn btn-info">Novo</a>
    <table id="example" class="table table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Foto</th> 
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th> 
        </thead>
        <tbody>
            <?php foreach ($resultado_clientes as $cliente){ ?>
                <tr>
                    <td><?= $cliente['nome']; ?></td>
                    <td>    
                        <?php                       
                            echo "<img heigth='100' width='100' src='./upload/" . $cliente['path'] . "' alt='teste'  > "; 
                        ?>
                    </td>
                    <td><?= $cliente['email']; ?></td>
                    <td><?= $cliente['telefone']; ?></td>                
                    <td>
                        <a class="btn btn-warning" 
                        href="./view/edit_cliente.php?id=<?= $cliente['id']; ?>">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <a class="btn btn-danger"
                            href="./controller/proc_remove_cliente.php?id=<?= $cliente['id']; ?>">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>