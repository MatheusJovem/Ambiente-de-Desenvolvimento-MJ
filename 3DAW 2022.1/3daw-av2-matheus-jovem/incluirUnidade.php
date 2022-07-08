<?php
    header('Access-Control-Allow-Origin: *');
    require_once('config.php');
    session_start();

    $marca=$_POST['marca'];
    $modelo=$_POST['modelo'];
    $qtdAssentos=$_POST['qtdAssentos'];
    $temBanheiro=$_POST['temBanheiro'];
    $temArCondicionado=$_POST['temArCondicionado'];
    $chassis=$_POST['chassis'];
    $placa=$_POST['placa'];

    if(empty($marca) || empty($modelo) || empty($qtdAssentos) || empty($chassis) || empty($placa)){
        echo json_encode(["message" => " Todos os campos precisam ser preenchidos"]);
    }else{
        $str = "SELECT * FROM onibus WHERE modelo='$modelo'";
        $response = $connection->query($str);

        if($response-> num_rows > 0){
            echo json_encode(["message"=>"Modelo de Onibus ja registrado"]);
        }else{
            $sql="INSERT INTO onibus(marca, modelo, qtdAssentos, temBanheiro, temArCondicionado, chassis, placa) 
                  VALUES('".$marca."', '".$modelo."',' ".$qtdAssentos."',' ".$temBanheiro."', '".$temArCondicionado."', '".$chassis."', '".$placa."')";

            $result =  $connection->query($sql);

            if(!$result){
                http_response_code(500);
                echo json_encode(["message"=>"Error ao inserir no banco de Dados"]);
            }else{
                http_response_code(200);
                echo json_encode(["message" =>"Inserido com sucesso"]);
            }
        }
    }
?>