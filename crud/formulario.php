<?php

    if(isset($_POST['submit']))
    {
        include_once('conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];

        $result = mysqli_query($connection, "INSERT INTO clientes(nome,email,idade) 
        VALUES ('$nome','$email','$idade')");

        header('Location: listagem.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/formulario.css">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <a href="home.php">Voltar</a>
    <a href="listagem.php">Lista de Clientes</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Cadastro dos Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="idade" id="idade" class="inputUser" required>
                    <label for="idade" class="labelInput">Idade</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>