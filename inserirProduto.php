<?php

    include 'conexao.php';

    $numeroProduto  = $_POST ["numeroProduto"];
    $nomeProduto    = $_POST ["nomeProduto"];
    $qtdProduto     = $_POST ["qtdProduto"];
    $categoria      = $_POST ["categoria"];
    $fornecedor     = $_POST ["fornecedor"];

    $sql = "INSERT INTO `produtos`(`numeroProduto`, `nomeProduto`, `qtdProduto`, `categoria`, `fornecedor`) 
    VALUES ($numeroProduto,'$nomeProduto',$qtdProduto,'$categoria','$fornecedor')";

    $inserir = mysqli_query($conexao,$sql);
    
?>

<div>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <h4>Produto Cadastrado com Sucesso</h4>

    <div>
    <a href="index.php" role ="button" class="btn btn-secondary">Cadastrar Novo Item</a>
    </div>
</div>