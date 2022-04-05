<?php
    include ("conexion.php");
    $solicita=$_POST['tiemposolicitado'];
    session_start();
    $idU=$_SESSION['usuarioId'];

    $sql="SELECT SUM(horario) FROM permiso WHERE idusuario='".$idU."'";
    $result=$mysqli->query($sql);
    $tiempo=mysqli_fetch_assoc($result)["SUM(horario)"];

    if($solicita+$tiempo>90){
        echo '<script type="text/javascript">alert("Solicita mucho tiempo");</script>';
    }else{
        echo '<script type="text/javascript">alert("Tiempo concedido");</script>';
    }
    
    /*
    if(isset($nombre)){
        $sql="INSERT INTO usuario(nombre,contrasena,usser) ";
        $sql.="VALUES('$nombre','$contrasena','$usser')";
        $result=$mysqli->query($sql);
    }
    */
    /*
    if($mysqli->affected_rows > 0){
        echo '<script type="text/javascript">alert("Bieeen");</script>';
    }else{
        echo '<script type="text/javascript">alert("Error");</script>';
    }
    */
    //echo '<script type="text/javascript"> window.location="index.php"; </script>';

?>