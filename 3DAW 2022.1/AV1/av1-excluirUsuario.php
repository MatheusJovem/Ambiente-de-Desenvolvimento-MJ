<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>av1 - excluir pergunta</title>

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
<h1>AV1 - 3DAW - Excluir Usuário</h1>
<?php
require "dados-usuarios.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if(file_exists($temp)) unlink($temp);
    if(file_exists($tempUsuarios)) unlink($tempUsuarios);
    echo "<div class='container'>";
    echo "<form action='' method='post'>";
    if (file_exists($csv)) {
        $matricula = $_GET['matricula'];
        $output = fopen($csv, 'r');
        if(file_exists($temp)) unlink($temp);
        $temp = fopen($temp, 'w');
        if(file_exists($tempUsuarios)) unlink($tempUsuarios);
        $tempUsuarios = fopen($tempUsuarios, 'w');
        while (($data = fgetcsv($output, 1024)) != FALSE) {
            if (reset($data) == $matricula) {
                fputcsv($tempUsuarios, $data);
                continue;
            }
            fputcsv($temp, $data);
        }

        $output = fopen("tempUsuarios.csv", 'r');

        while (list($matricula, $nome, $funcao) = fgetcsv($output, 1024, ',')) {

            echo "<tr>";
            echo "<td>$matricula</td>";
            echo "<td>" . strtoupper($nome) . "</td>";
            echo "<td>" . strtoupper($funcao) . "</td>";
            echo "<td><input class='del_btn' type='submit' value='Excluir Usuário'></td>";
            echo "</tr>";
        }

        $output = fopen("tempUsuarios.csv", 'r');

        echo "</table>";
        echo "</form>";
        echo "<a href='av1-home.html'><button class='return_btn'>Voltar</button></a>";
        echo "</div>";
        fclose($output);
        fclose($temp);
        fclose($tempUsuarios);
    }
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    unlink("tempUsuarios.csv");
    rename("temp.csv", $csv);
    echo "<p class='center'>Usuário Excluído!</p>";
    echo "<a href='av1-home.html'><button class='return_btn'>Voltar</button></a>";
}
?>

<br>
<a href="av1-criarUsuario.php">Criar Usuario</a><br>
<a href="av1-listarTodosUsuarios.php">Listar todos Usuarios</a><br>
<a href="av1-listarUmUsuario.php">Listar um Usuario</a><br>
<br>

</body>
</html>
