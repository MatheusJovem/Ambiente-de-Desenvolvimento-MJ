<?php
    $id = $_GET["id"];
    $nome = $_GET["nome"];
    $endereco = $_GET["endereco"];
    $postalCode = $_GET["postalCode"];
    $pais = $_GET["pais"];
    $cpf = $_GET["cpf"];
    $passaporte = $_GET["passaporte"];
    $email = $_GET["email"];
    $nascimento = $_GET["nascimento"];

    $servidor = "localhost";
    $username = "root";
    $senha = "";
    $database = "3daw_av2";
    $conn = new mysqli($servidor,$username,$senha, $database);
    if ($conn->connect_error) {
        die("Conexao Falhou, avise o administrador do sistema");
    }
    $comandoSQL = "INSERT INTO `clientes`(`id`, `nome`, `endereco`, `postalCode`, `pais`, `cpf`, `passaporte`, `email`, `nascimento`,) VALUES ('$id',$nome,'$endereco','$postalCode','$pais','$cpf','$passaporte','$email','$nascimento')";
    $result = $conn->query($comandoSQL);
    $sucesso = "Cliente inserido com sucesso!";

    $comandoSQL = "SELECT * from `clientes` where nome = '$nome'";
    $result = $conn->query($comandoSQL);
    $jCliente = json_encode($result->fetch_assoc(), JSON_UNESCAPED_UNICODE);

    echo $jCliente;
?>
