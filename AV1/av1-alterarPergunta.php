<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>av1 - alterar pergunta</title>

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
		<h1>AV1 - 3DAW - Excluir Pergunta</h1>
		<?php
		require "dados-perguntas.php";

		if ($_SERVER['REQUEST_METHOD'] == 'GET') {

			if (file_exists($csv)) {
				$id = $_GET['id'];
				$output = fopen($csv, 'r');
				if(file_exists($temp)) unlink($temp);
				$temp = fopen($temp, 'w');
				if(file_exists($tempPerguntas)) unlink($tempPerguntas);
				$tempPerguntas = fopen($tempPerguntas, 'w');
				while (($data = fgetcsv($output, 1024)) != FALSE) {
					if (reset($data) == $id) {
						fputcsv($tempPerguntas, $data);
						continue;
					}
					fputcsv($temp, $data);
				}
				

				$output = fopen("tempPerguntas.csv", 'r');


				while (list($id, $texto, $pontos, $dificuldade) = fgetcsv($output, 1024, ',')) {
					echo "<div class='container'>
					<form action='' method='post'>
						<table class='editar'>
					<tr>
						<td>Id: </td>
						<td><input type='text' name='id' value='" . $id . "' size='30' required></td>
					</tr>    
					<tr>
						<td>Texto da Pergunta: </td>
						<td><input type='text' name='texto' value='" . strtoupper($texto) . "' size='30' required></td>
					</tr>
					<tr>
						<td>Pontos da Pergunta: </td>
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
					</tr>";
				}
				echo "</table>
				<input class='edit_btn' style='display: block; margin:0 auto'  type='submit' value='Alterar Pergunta'>
				</form>
				<a href='av1-home.php'><button class='return_btn'>Voltar</button></a>
				</div>";
				fclose($output);
				fclose($temp);
				fclose($tempPerguntas);
			}
		}
		?>

		<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$texto = strtolower($_POST['texto']);
			$pontos = $_POST['pontos'];
			$dificuldade = strtolower($_POST['dificuldade']);
			$linha = array(
				$_POST['id'],
				$texto,
				$_POST['pontos'],
				$dificuldade
			);
			$output = fopen("temp.csv", 'a');
			fputcsv($output, $linha);
			fclose($output);
			unlink($tempPerguntas);
			rename($temp, $csv);
			echo "<p class='center'>Pergunta Alterada!</p>";
			echo "<a href='av1-home.php'><button class='return_btn'>Voltar</button></a>";
		}
		?>
		
		<br>
		<a href="av1-criarPergunta.php">Criar Pergunta</a><br>
		<a href="av1-listarTodasPerguntas.php">Listar todas Perguntas</a><br>
		<a href="av1-listarUmaPergunta.php">Listar uma Pergunta</a><br>
		<br>

	</body>
</html>