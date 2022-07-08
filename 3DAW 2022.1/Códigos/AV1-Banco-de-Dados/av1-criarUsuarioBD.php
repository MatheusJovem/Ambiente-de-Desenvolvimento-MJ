<?php
if(isset($_POST['submit']))
{

    include_once('config.php');

    $matricula = $_POST['matricula'];
    $nome = $_POST['nome'];
    $funcao = $_POST['funcao'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(matricula,nome,funcao) 
        VALUES ('$matricula','$nome','$funcao')");

    header('Location: av1-homeBD.html');
}
?>
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
<div>
			<form action="av1-criarUsuarioBD.php" method='POST'>
				<table class='adicionar'>
				    <tr>
						<td>Matrícula: </td>
						<td>
						    <input type='text' name='matricula' id='matricula'  size='30' required>
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
				<input class='add_btn' type='submit' id='submit' value='Adicionar Usuário'>
			</form>
		</div>

<br>
<a href="av1-criarUsuarioBD.php">Criar Usuario</a><br>
<a href="av1-listarTodosUsuariosBD.php">Listar todos Usuarios</a><br>
<br>

</body>
</html>
