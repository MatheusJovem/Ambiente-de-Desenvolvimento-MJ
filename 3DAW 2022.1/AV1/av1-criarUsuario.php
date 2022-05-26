<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>av1 - Criar Usuario</title>

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
<h1>AV1 - 3DAW - Criar Usuário</h1>
<?php
require "dados-usuarios.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if(file_exists($temp)) unlink($temp);
    if(file_exists($tempUsuarios)) unlink($tempUsuarios);
    echo "<div class='container'>";
    echo "</table>";
    echo "</div>";

    echo "<hr>";

    echo "<div class='container'>
			<form action='' method='post'>
				<table class='adicionar'>
				    <tr>
						<td>Matrícula: </td>
						<td>
						    <input type='text' name='matricula' id=''  size='30' required>
						</td>
					</tr>
					<tr>
						<td>Nome: </td>
						<td>
						    <input type='text' name='nome' id='nome' size='30' required>
						</td>
					</tr>
					<tr>
						<td>Função: </td>
						<td>
							<input type='text' name='funcao' id='funcao' size='30' required>
						</td>
					</tr>
				</table>
				<input class='add_btn' type='submit' value='Adicionar Usuário'>
			</form>
		</div>";
    echo "<hr>";
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $matricula = $_POST['matricula'];
    $nome = strtolower($_POST['nome']);
    $funcao = strtolower($_POST['funcao']);
    echo $matricula;
    $linha = array(
        $matricula,
        $nome,
        $funcao
    );
    if (file_exists($csv)) {
        $output = fopen($csv, 'a');
        fputcsv($output, $linha);
        fclose($output);
        echo "<p class='center'>Usuario Adicionado!</p>";
    } else {
        $output = fopen($csv, 'w');
        fputcsv($output, $linha);
        fclose($output);
        echo "<p class='center'>Usuario Adicionado!</p>";
    }
    echo "<a href='av1-criarUsuario.php'><button class='return_btn'>Voltar</button></a>";
}
?>

<br>
<a href="av1-criarUsuario.php">Criar Usuario</a><br>
<a href="av1-listarTodosUsuarios.php">Listar todos Usuarios</a><br>
<a href="av1-listarUmUsuario.php">Listar um Usuario</a><br>
<br>

</body>
</html>
