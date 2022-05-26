<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>av1 - alterar usuario</title>

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

        .editar {
            width: 40%;
        }

        .editar td {
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
            echo "<div class='container'>
					<form action='' method='post'>
						<table class='editar'>
					<tr>
						<td>Matricula: </td>
						<td><input type='text' name='matricula' value='" . $matricula . "' size='30' required></td>
					</tr>    
					<tr>
						<td>Nome: </td>
						<td><input type='text' name='nome' value='" . strtoupper($nome) . "' size='30' required></td>
					</tr>
					<tr>
						<td>Função: </td>
						<td><input type='text' name='funcao' value='" . strtoupper($funcao) . "' size='30' required></td>
					</tr>
					";
        }
        echo "</table>
				<input class='edit_btn' style='display: block; margin:0 auto'  type='submit' value='Alterar Usuário'>
				</form>
				<a href='av1-home.html'><button class='return_btn'>Voltar</button></a>
				</div>";
        fclose($output);
        fclose($temp);
        fclose($tempUsuarios);
    }
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $matricula = $_POST['matricula'];
    $nome = strtolower($_POST['nome']);
    $funcao = strtolower($_POST['funcao']);
    $linha = array(
        $matricula,
        $nome,
        $funcao
    );
    $output = fopen("temp.csv", 'a');
    fputcsv($output, $linha);
    fclose($output);
    unlink($tempUsuarios);
    rename($temp, $csv);
    echo "<p class='center'>Usuário Alterado!</p>";
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