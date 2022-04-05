<?php
    include ("conexion.php");
    $nombre=$_POST['nombre'];
    $contrasena=$_POST['contrasena'];
    $usser=$_POST['usser'];
    if(isset($nombre)){
        $sql="INSERT INTO usuario(nombre,contrasena,usser) ";
        $sql.="VALUES('$nombre','$contrasena','$usser')";
        $result=$mysqli->query($sql);
    }
    if($mysqli->affected_rows > 0){
        echo '<script type="text/javascript">alert("Bieeen");</script>';
    }else{
        echo '<script type="text/javascript">alert("Error");</script>';
    }
    echo '<script type="text/javascript"> window.location="index.php"; </script>';
?>