<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $matricula = $_POST["matricula"];
        $nome = $_POST["nome"];
        $funcao = $_POST["funcao"];
        $senha = $_POST["senha"];

        $user = 'root';
        $pass = '';

        $conn = new PDO('mysql:host=localhost;dbname=3dawj', $user, $pass);
	    $sql = "INSERT INTO `Usuario`(`nome`,`matricula`,`funcao`,`senha`) VALUES ('$nome','$matricula','$funcao','$senha')";
    }
    echo $matricula.$nome.$funcao.$senha."👍";
?>