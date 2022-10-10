<?php

    include 'conexao.php';
    $id = $_POST['id'];

    $nomeCliente         = $_POST["nomeCliente"];
    $telefoneCliente     = $_POST["telefoneCliente"];
    $emailCliente        = $_POST["emailCliente"];
    $enderecoCliente     = $_POST["enderecoCliente"];
    $cpfCliente          = $_POST["cpfCliente"];
    $genero              = $_POST["genero"];



   $sql = "UPDATE `cliente` SET`nomeCliente`='$nomeCliente',`telefoneCliente`= '$telefoneCliente',`emailCliente`='$emailCliente',`enderecoCliente`='$enderecoCliente',`cpfCliente`= $cpfCliente,`genero`='$genero' WHERE idCliente = $id";

    $atualizar = mysqli_query($conexao,$sql);
?>

<div>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <h4>Cliente Atualizado com Sucesso</h4>

    <div>
    <a href="listarCliente.php" role ="button" class="btn btn-secondary">Cadastrar Novo Cliente</a>
    </div>
</div>