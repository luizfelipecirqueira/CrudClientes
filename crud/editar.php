<?php
    include_once('conexao.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM clientes WHERE id=$id";
        $result = $connection->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($rows = mysqli_fetch_array($result))
            {
                $nome = $rows['nome'];
                $email = $rows['email'];
                $idade = $rows['idade'];
            }
        }
        else
        {
            header('Location: listagem.php');
        }
    }
    else
    {
        header('Location: listagem.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/editar.css">
    <title>Tela de Edição</title>
</head>
<body>
    <a href="listagem.php">Voltar</a>
    <div class="box">
        <form action="salvarEdicao.php" method="POST">
            <fieldset>
                <legend><b>Editar Cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="idade" id="idade" class="inputUser" value=<?php echo $idade;?> required>
                    <label for="idade" class="labelInput">Idade</label>
                </div>
                <br><br>
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>