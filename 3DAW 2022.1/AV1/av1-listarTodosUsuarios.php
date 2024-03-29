<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>av1 - Listar todos Usuários</title>

    <style>

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border: 1px solid black;

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
<h1>AV1 - 3DAW - Listar Todos Usuários</h1>
<?php
require "dados-usuarios.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if(file_exists($temp)) unlink($temp);
    if(file_exists($tempUsuarios)) unlink($tempUsuarios);
    echo "<div class='container'>";

    if (file_exists($csv)) {
        $output = fopen($csv, 'r');

        while (list($matricula, $nome, $funcao) = fgetcsv($output, 1024, ',')) {
            echo "<table>";
            echo "<tr>";
            echo "<td>$matricula</td>";
            echo "<td >" . strtoupper($nome) . "</td>";
            echo "<td>" . strtoupper($funcao) . "</td>";
            echo "<td>
                            <a href='av1-alterarUsuario.php?matricula=" . $matricula . "'><button class='edit_btn'>Alterar</button></a>
                            <a href='av1-excluirUsuario.php?matricula=" . $matricula . "'><button class='del_btn'>Excluir</button></a>
                         </td></tr></tr>";
            echo "</table>";
        }
        fclose($output);
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
