<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $matricula = $_POST["matricula"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        if(!file_exists("Alunos.txt")) {
            $arquivoAluno1w = fopen("Alunos.txt", "w") or die("Arquivo 1 com problema.");
            $cabecalho = "matricula;nome;email\n";
            fwrite($arquivoAluno1w, $cabecalho);
            fclose($arquivoAluno1w);
        }

        $arquivoAluno1 = fopen("Alunos.txt", "r") or die("Arquivo 1 com problema.");
        while(!feof($arquivoAluno1)){
            echo fgets($arquivoAluno1) . "<br>";
        }
        fclose($arquivoAluno1);

        $arquivoAluno1w = fopen("Alunos.txt", "a") or die("Arquivo 1 com problema.");
        $linha = $matricula . ";" . $nome . ";" . $email . "\n";
        fwrite($arquivoAluno1w, $linha);
        fclose($arquivoAluno1w);

        $arquivoAluno1 = fopen("Alunos.txt", "r") or die("Arquivo 1 com problema.");
        $arquivoAluno2w = fopen("Alunos2.txt", "w") or die("Arquivo 2 com problema.");
        while(!feof($arquivoAluno1)){
            fwrite($arquivoAluno2w, fgets($arquivoAluno1));
        }
        fclose($arquivoAluno1);
        fclose($arquivoAluno2w);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>3DAW - Exercício 15 - Matheus Jovem Seixas - 2010478300050</title>
        <style>
            body{
                text-align: center;
                font-family: Verdana;
            }
        </style>
    </head>
    <body>
        <h1>3DAW</h1>
        <h2>Exercício 15 - Incluir Aluno</h2>

        <form action="ex15_IncluirAluno.php" method="POST">
            Matricula: <input type="text" name="matricula">
            <br>
            Nome: <input type="text" name="nome">
            <br>
            Email: <input type="email" name="email">
            <br><br>
            <input type="submit" value="Inserir">
        </form>
    </body>
</html>
