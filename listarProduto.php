<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Listagem de produtos</title>
</head>

<body>
    <div class="container">
        <h3 class="titulo">Listagem de Produtos</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Numero</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `produtos`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $idProduto      = $array["idProduto"];
                $numeroProduto  = $array["numeroProduto"];
                $nomeProduto    = $array["nomeProduto"];
                $qtdProduto     = $array["qtdProduto"];
                $categoria      = $array["categoria"];
                $fornecedor     = $array["fornecedor"];
            ?>
            <tr>
                <td><?php  echo $numeroProduto  ?></td>
                <td><?php  echo $nomeProduto    ?></td>
                <td><?php  echo $qtdProduto     ?></td>
                <td><?php  echo $categoria      ?></td>
                <td><?php  echo $fornecedor     ?></td>
                <td><a class="btn btn-dark" href="editarProduto.php?id=<?php echo $idProduto ?>" role="button">Editar</a></td>
                <td><a class="btn btn-danger" href="excluirProduto.php?id=<?php echo $idProduto ?>" role="button">Excluir</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>