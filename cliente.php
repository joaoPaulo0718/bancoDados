<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro Cliente</title>
</head>
<body>
    <section>
        <div class="container tamanhoFormulario">
            <form action="inserirCliente.php" method="POST">
                <h3 style="text-align: center">Cadastro de Clientes</h3>
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name= "nomeCliente" placeholder="Entre com o seu nome:" required>
                </div>

                <div class="form-group">
                    <label>Telefone</label>
                    <input type="number" class="form-control" name= "telefoneCliente" placeholder="Entre com o seu numero:" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name= "emailCliente" placeholder="Entre com seu email:" required>
                </div>

                <div class="form-group">
                    <label>Endereco</label>
                    <input type="text" class="form-control" name= "enderecoCliente" placeholder="Entre com seu endereço:" required>
                </div>

                <div class="form-group">
                    <label>CPF</label>
                    <input type="number" class="form-control" name= "cpfCliente" placeholder="Entre com seu cpf:" required>
                </div>

                <div class="form-group">
                    <label>Genero</label>
                    <select class="form-control" name = "genero">
                        <option>Masculino</option>
                        <option>Feminino</option>
                        <option>Outros</option>
                    </select>
                </div>
                
                <div class="botao">
                    <button type="submit" class="btn btn-secondary botao">Cadastrar</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>