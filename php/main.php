<?php 

    include("conexao.php");

    //Declaração de variáveis
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['description'];
    $getMessage = '';

    //Comando SQL
    $command_sql = "INSERT INTO cliente(email, nome, telefone, mensagem) 
                    VALUES  ('$email', '$nome', '$telefone', '$mensagem')";

    //Verificando se as informações foram enviadas
    if (mysqli_query($connection, $command_sql)) {
        $mensagem = 'Mensagem enviada com Sucesso!';
        header("Location: ../index.php?msg=$mensagem");
    } else {
        $mensagem = "Mensagem não enviada :(";
        header("Location: ../index.php?msg=$mensagem");
    }

    mysqli_close($connection)

?>