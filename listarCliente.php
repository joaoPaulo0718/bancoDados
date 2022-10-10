<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Listagem de Cliente</title>
</head>

<body>
    <div class="container">
        <h3 class="titulo">Listagem de Cliente</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Cpf</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `cliente`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $idCliente           = $array["idCliente"];
                $nomeCliente         = $array["nomeCliente"];
                $telefoneCliente     = $array["telefoneCliente"];
                $emailCliente        = $array["emailCliente"];
                $enderecoCliente     = $array["enderecoCliente"];
                $cpfCliente          = $array["cpfCliente"];
                $genero              = $array["genero"];
            ?>
                <tr>
                    <td><?php echo $nomeCliente         ?></td>
                    <td><?php echo $telefoneCliente     ?></td>
                    <td><?php echo $emailCliente        ?></td>
                    <td><?php echo $enderecoCliente     ?></td>
                    <td><?php echo $cpfCliente          ?></td>
                    <td><?php echo $genero              ?></td>
                    <td><a class="btn btn-dark" href="editarCliente.php?id=<?php echo $idCliente ?>" role="button">Editar</a></td>
                    <td><a class="btn btn-danger" href="excluirCliente.php?id=<?php echo $idCliente ?>" role="button">excluir</a></td>
                </tr>
            <?php } ?>





        </table>
    </div>
</body>

</html>