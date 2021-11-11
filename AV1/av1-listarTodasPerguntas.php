<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>av1 - listar todas pergunta</title>
		
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
		<h1>AV1 - 3DAW - Listar Todas Perguntas</h1>
		<?php
		require "dados-perguntas.php";

		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			if(file_exists($temp)) unlink($temp);
			if(file_exists($tempPerguntas)) unlink($tempPerguntas);
			echo "<div class='container'>";

        if (file_exists($csv)) {
            $output = fopen($csv, 'r');
			
            while (list($id, $texto, $pontos, $dificuldade) = fgetcsv($output, 1024, ',')) {
                echo "<tr>";
				echo "<tr>$id</td>";
                echo "<td>" . strtoupper($texto) . "</td>";
                echo "<td>$pontos</td>";
                echo "<td>" . strtoupper($dificuldade) . "</td>";
                echo "<td>
                            <a href='av1-alterarPergunta.php?id=" . $id . "'><button class='edit_btn'>Alterar</button></a>
                            <a href='av1-excluirPergunta.php?id=" . $id . "'><button class='del_btn'>Excluir</button></a>
                         </td>";
                echo "</tr>";
            }
            fclose($output);
        }
		
		}
		?>

		<br>
		<a href="av1-criarPergunta.php">Criar Pergunta</a><br>
		<a href="av1-listarTodasPerguntas.php">Listar todas Perguntas</a><br>
		<a href="av1-listarUmaPergunta.php">Listar uma Pergunta</a><br>
		<br>

	</body>
	</html>
