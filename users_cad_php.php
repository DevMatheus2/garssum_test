<?php 
    include("connection.php");

    session_start();
    if (!isset($_SESSION["ID_usuario"])) {
        header("Location: index.php");
    }

    $name = $_POST["txtName"];
    $nasc_date = $_POST["txtNasc"];
    $email = $_POST["txtEmail"];
    $senha = $_POST["txtSenha"];
    $sql = "INSERT INTO usuario (nome, data_nasc, email, senha) VALUES('$name','$nasc_date','$email', '$senha')";
    $result = $conn->query($sql);

    if ($result === TRUE){
        header("Location: index.php");
    }
    else {
        echo "Algo deu errado...";
    }

?>