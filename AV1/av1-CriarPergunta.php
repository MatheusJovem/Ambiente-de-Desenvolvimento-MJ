<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>av1 - criar pergunta</title>
		
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
		<h1>AV1 - 3DAW - Criar Pergunta</h1>
		<?php
		require "dados-perguntas.php";

		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			if(file_exists($temp)) unlink($temp);
			if(file_exists($tempPerguntas)) unlink($tempPerguntas);
			echo "<div class='container'>";
			/*
        if (file_exists($csv)) {
            $output = fopen($csv, 'r');
			
            while (list($id, $texto, $pontos, $dificuldade) = fgetcsv($output, 1024, ',')) {
                echo "<tr>";
				echo "<tr>$id</td>";
                echo "<td>" . strtoupper($texto) . "</td>";
                echo "<td>$pontos</td>";
                echo "<td>" . strtoupper($dificuldade) . "</td>";
                echo "<td>
                            <a href='av1-editarPergunta.php?id=" . $id . "'><button class='edit_btn'>Editar</button></a>
                            <a href='av1-excluirPergunta.php?id=" . $id . "'><button class='del_btn'>Excluir</button></a>
                         </td>";
                echo "</tr>";
            }
            fclose($output);
        }
			*/
			echo "</table>";
			echo "</div>";

			echo "<hr>";

			echo "<div class='container'>
			<form action='' method='post'>
				<table class='adicionar'>
					<tr>
						<td>Texto Pergunta: </td>
						<td><input type='text' name='texto' id='texto' size='30' required></td>
					</tr>
					<tr>
						<td>Quantidade de Pontos: </td>
						<td><input type='number' name='pontos' id=''  size='30' min='1' max='100' value='0' required></td>
				
					</tr>
					<tr>
						<td>Dificuldade: </td>
						<td>
							<select name='dificuldade' id=''>
								<option value='facil'>Fácil</option>
								<option value='media'>Média</option>
								<option value='dificil'>Difícil</option>
								<option value='muito dificil'>Muito Difícil</option>
							</select>
						</td>
					</tr>
				</table>
				<input class='add_btn' type='submit' value='Adicionar Pergunta'>
			</form>
		</div>";
			echo "<hr>";
		}
		?>

		<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$texto = strtolower($_POST['texto']);
			$dificuldade = strtolower($_POST['dificuldade']);
			 $id = time() * rand(1, 9);
			echo $id;
			$linha = array(
				$id,
				$texto,
				$_POST['pontos'],
				$dificuldade
			);
			if (file_exists($csv)) {
				$output = fopen($csv, 'a');
				fputcsv($output, $linha);
				fclose($output);
				echo "<p class='center'>Pergunta adicionada!</p>";
			} else {
				$output = fopen($csv, 'w');
				fputcsv($output, $linha);
				fclose($output);
				echo "<p class='center'>Pergunta adicionada!</p>";
			}
			echo "<a href='av1-criarPergunta.php'><button class='return_btn'>Voltar</button></a>";
		}
		?>
		
		<br>
		<a href="av1-criarPergunta.php">Criar Pergunta</a><br>
		<a href="av1-listarTodasPerguntas.php">Listar todas Perguntas</a><br>
		<a href="av1-listarUmaPergunta.php">Listar uma Pergunta</a><br>
		<br>

	</body>
</html>