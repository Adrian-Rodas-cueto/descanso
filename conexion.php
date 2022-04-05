<?php
    $host='localhost';
    $user='root';
    $password='';
    $database='usuarios';
    $mysqli=new mysqli($host,$user,$password,$database);
    if($mysqli->connect_errno){
        echo "<h1> error en la conexion a DB: </h1>".$mysqli->connect_error;
    }
?>