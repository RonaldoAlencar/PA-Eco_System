<?php
    session_start();
    include_once("conexao.php");

    $nome = $_POST["nome"]; //Recupera o valor e atribui a variável
    $email = $_POST["email"]; //Recupera o valor e atribui a variável
    $cpf = $_POST["cpf"];

    //echo "Nome: $nome <br>";
    //echo "Email: $email <br>";

    $inserir_usuario = "INSERT INTO hospede(nome, email, cpf) VALUES ('$nome', '$email', '$cpf')";
    $resultado_usuario = mysqli_query($conn, $inserir_usuario);

    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "<p style='color:green;'>Hóspede cadastrado com sucesso!<p>";
        header("Location: cad_usuario.php");
    }else{
        header("Location: cad_usuario.php");
        $_SESSION['msg'] = "<p style='color:red;'>Hóspede não foi cadastrado com sucesso!<p>";
    }

?>