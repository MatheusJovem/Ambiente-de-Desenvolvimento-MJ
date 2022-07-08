<?php
    header('Access-Control-Allow-Origin: *');
    require_once('config.php');

    $id = $_POST['id'];
    $marca=$_POST['marca'];
    $modelo=$_POST['modelo'];
    $qtdAssentos=$_POST['qtdAssentos'];
    $temBanheiro=$_POST['temBanheiro'];
    $temArCondicionado=$_POST['temArCondicionado'];
    $chassis=$_POST['chassis'];
    $placa=$_POST['placa'];

    $sql="UPDATE onibus SET marca='".$marca."', modelo='".$modelo."', qtdAssentos='".$qtdAssentos."', temBanheiro='".$temBanheiro."',
                            temArCondicionado='".$temArCondicionado."', chassis='".$chassis."',
                            placa='".$placa."' WHERE id='$id'";

    $response = $connection->query($sql);

    if($response===TRUE){
        echo json_encode(["message"=>"Unidade alterada com sucesso"]);
    }else{
       echo json_encode(["message"=>"Erro ao alterar Unidade"]);
    }
?>