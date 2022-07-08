<?php
session_start();
include_once('config.php');

$sql = "SELECT * FROM usuarios ORDER BY id DESC";

$result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>av1 - Listar todos Usuários BD</title>

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
    <h1>AV1 - 3DAW - Listar Todos Usuários BD</h1>

    <div c>
        <table >
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Matricula</th>
                <th scope="col">Nome</th>
                <th scope="col">Função</th>
                <th scope="col">Operações</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$user_data['id']."</td>";
                echo "<td>".$user_data['matricula']."</td>";
                echo "<td>".$user_data['nome']."</td>";
                echo "<td>".$user_data['funcao']."</td>";
                echo "<td>
                        <a  href='editUsuarios.php?id=$user_data[id]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' >
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a  href='deleteUsuarios.php?id=$user_data[id]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' >
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>

    <br>
    <a href="av1-criarUsuarioBD.php">Criar Usuario</a><br>
    <a href="av1-listarTodosUsuariosBD.php">Listar todos Usuarios</a><br>
    <br>

    </body>
</html>
