<?php
    // isset -> serve para saber se uma variável está definida
    include_once('conexao.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        
        $sqlInsert = "UPDATE clientes 
        SET nome='$nome',email='$email',idade='$idade'
        WHERE id=$id";
        $result = $connection->query($sqlInsert);
        print_r($result);
    }
    header('Location: listagem.php');

?>