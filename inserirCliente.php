<?php

    include 'conexao.php';

    $nomeCliente        = $_POST ["nomeCliente"];
    $telefoneCliente    = $_POST ["telefoneCliente"];
    $emailCliente       = $_POST ["emailCliente"];
    $enderecoCliente    = $_POST ["enderecoCliente"];
    $cpfCliente         = $_POST ["cpfCliente"];
    $genero             = $_POST ["genero"];

    $sql = "INSERT INTO `cliente`(`nomeCliente`, `telefoneCliente`, `emailCliente`, `enderecoCliente`, `cpfCliente`, `genero`)
     VALUES ('$nomeCliente','$telefoneCliente','$emailCliente','$enderecoCliente', $cpfCliente ,'$genero')";

    $inserir = mysqli_query($conexao,$sql);
    
?>

<div class = "container">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <h4>Cliente Cadastrado com Sucesso</h4>

    <div>
    <a href="index.php" role ="button" class="btn btn-secondary">Cadastrar Novo Cliente</a>
    </div>
</div>