<?php

    include 'conexao.php';
    $id = $_POST['id'];

    $numeroProduto  = $_POST["numeroProduto"];
    $nomeProduto    = $_POST["nomeProduto"];
    $qtdProduto     = $_POST["qtdProduto"];
    $categoria      = $_POST["categoria"];
    $fornecedor     = $_POST["fornecedor"];



    $sql = "UPDATE `produtos` SET `numeroProduto`=$numeroProduto,`nomeProduto`='$nomeProduto',`qtdProduto`= $qtdProduto,`categoria`='$categoria',`fornecedor`='$fornecedor' WHERE idProduto = $id";

    $atualizar = mysqli_query($conexao,$sql);
?>

<div>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <h4>Produto Atualizado com Sucesso</h4>

    <div>
    <a href="listarProduto.php" role ="button" class="btn btn-secondary">Cadastrar Novo Item</a>
    </div>
</div>