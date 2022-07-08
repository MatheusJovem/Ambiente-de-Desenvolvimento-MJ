<?php
    header('Access-Control-Allow-Origin: *');
    require_once('config.php');
    $id = $_POST['id'];

    if(empty($id)){
        echo json_encode(["message" => "Sem id"]);
    }else{
        $sql = "SELECT * FROM onibus WHERE id='$id'";
        $response = $connection->query($sql);
        $rows=array();
        if($response-> num_rows > 0){
            foreach($response as $r){
                $rows[] = $r;
            }
            echo json_encode($rows);
        }
    }
?>