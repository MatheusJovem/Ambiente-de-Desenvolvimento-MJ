<?php
    header('Access-Control-Allow-Origin: *');
    require_once('config.php');

    $id=$_POST['id'];

    if(empty($id)){
        echo json_encode(["message"=>"Não foi passado nenhum id"]);
    }else{
        $sql="DELETE FROM onibus WHERE id='$id'";

        $response = $connection->query($sql);

        if($response === TRUE){
            echo json_encode(["message"=>"Unidade deletada com sucesso"]);
        }else{
            echo json_encode(["message" => "Erro ao excluir Unidade"]);
        }
    }
?>