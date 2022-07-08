<?php
    header('Access-Control-Allow-Origin: *');

    $host="localhost";
    $user="root";
    $password="";
    $dbName="3dawav2";

    $connection= new mysqli($host, $user, $password, $dbName);

    if($connection->connect_error){
        die("Connection Failed".$connection->connection_error);
    }
?>