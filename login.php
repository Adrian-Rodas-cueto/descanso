<?php
    include ('conexion.php');
    $nombre=$_POST['nombre'];
    $contrasena=$_POST['contrasena'];
    $sql="SELECT * FROM usuario WHERE nombre='$nombre' AND contrasena='$contrasena'";
    $result=$mysqli->query($sql);
    session_start();
    while($row=mysqli_fetch_assoc($result)){
        $_SESSION['usuarioId']=$row['idusuario'];
        $_SESSION['usuarioNom']=$row['nombre'];
    }

    echo '<script type="text/javascript"> window.location="index.php"; </script>';
?>