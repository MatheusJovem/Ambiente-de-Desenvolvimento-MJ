<?php
    header('Access-Control-Allow-Origin: *');
    require_once('config.php');
    $sql = "SELECT * FROM onibus ORDER BY id DESC";

    $resultado = $connection->query($sql);

    if($resultado->num_rows > 0){
        foreach($resultado as $row){
            echo"<tr>";
                echo"<td>".$row["marca"]."</td>";
                echo"<td>".$row["modelo"]."</td>";
                echo"<td>".$row["qtdAssentos"]."</td>";
                echo"<td>".$row["temBanheiro"]."</td>";
                echo"<td>".$row["temArCondicionado"]."</td>";
                echo"<td>".$row["chassis"]."</td>";
                echo"<td>".$row["placa"]."</td>";
                echo "<td>
                    <button  type=`button` class='btn btn-success' onclick=getId('".$row['id']."')>Editar</button>
                    <button  type=`button` class='btn btn-danger' onclick=deletarUnidade('".$row['id']."') >Excluir</button>
                </td>";
            echo"</tr>";
        }
    }else{
        echo("");
    }
?>
