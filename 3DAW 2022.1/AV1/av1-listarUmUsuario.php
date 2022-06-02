<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>av1 - listar usuario</title>

    <style>

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border: 1px solid #000;
            margin: 20px auto;
        }

        td {
            padding: 2px 5px;
            text-align: center;
            font-size: small;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .add_btn {
            display: block;
            margin: 10px auto;
            border: none;
            padding: 5px 8px;
        }

        .add_btn:hover {
            cursor: pointer;
        }

        .edit_btn {
            display: inline-block;
            margin-bottom: 10px;
            border: none;
            padding: 5px 8px;
            margin-right: 5px;
        }

        .edit_btn:hover {
            cursor: pointer;
        }

        .del_btn {
            display: inline-block;
            margin-bottom: 10px;
            border: none;
            padding: 5px 8px;
        }

        .del_btn:hover {
            cursor: pointer;
        }

        .return_btn {
            display: block;
            margin: 10px auto;
            border: none;
            padding: 5px 8px;
        }

        .adicionar {
            width: 40%;
        }

        .adicionar td {
            text-align: left;
        }

        .center {
            text-align: center;
        }

        body {
            text-align: center;
        }
    </style>
</head>

<body>
<h1>AV1 - 3DAW - Listar Um Usuário</h1>
<form action="av1-listarUmUsuario.php" method="post">
    Matricula do Usuário: <input type="text" name="matricula"><br><br>
    <input type="submit" value="Visualizar">
</form>
<br>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $matricula = $_POST["matricula"];
    if (file_exists("usuarios.csv")) {
        $arquivo = fopen("usuarios.csv", "r");
        $cont=0;
        while (list($matricula, $nome, $funcao) = fgetcsv($arquivo, 1000, ",")) {
            if ($matricula == $matricula || $matricula == "matricula") {
                echo "<tr><td>" . $matricula . "</td>";
                echo "<td>" . $nome . "</td>";
                echo "<td>" . $funcao . "</td>";
                echo "</tr>";
                echo "<br>";
                $cont++;

                if($cont==1)
                {
                    break;
                }
            }
        }
        fclose($arquivo);
    }
}
?>

<br>
<a href="av1-criarUsuario.php">Criar Usuario</a><br>
<a href="av1-listarTodosUsuarios.php">Listar todos Usuarios</a><br>
<a href="av1-listarUmUsuario.php">Listar um Usuario</a><br>
<br>

</body>
</html>
