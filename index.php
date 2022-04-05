<?php 
    include ("conexion.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Descansos Programados</title>
    <script src="jq.js" defer></script>
    <script src="java.js" defer></script>
    <!-- login -->
    
</head>

<body>
    <div id="res"></div>
    <main id="main" >
        <!-- menu -->
        <header>
            <p id="bienbenida" class="bienbenida ocultar">Ha iniciado sesion</p>
            <button class="menu icon-menu" id="bt_menu"></button>
            <button class="menu icon-menu oculto" id="bt_menu2"></button>
            <button class="desconectar icon-off " id="desconectar"></button>
            <button class="desconectar icon-off oculto" id="desconectar2"></button>
            <section class="opciones hide" id="menu">
                <form action="solicitar.php" method="POST" class="menu_derecho">
                    <label for="">Tiempo restante</label>
                    <input type="text" name="tiempo" id="tiempo_disponible" value="1:30" readonly>
                    <br><br>
                    <label for="">Tiempo a solicitar</label>
                    <input type="text" name="tiemposolicitado" id="tiempo_solicitado" placeholder="maximo 30min">
                    <br><br>
                    <input type="submit" value="pedir">
                    <div class="admin" id="admin">
                        <label for="">cantidad de personas que pueden descansar</label>
                        <input type="number" name="numero">
                        <input type="submit" value="actualizar">
                    </div>

                </form>
            </section>
        </header>
        <!-- mostrar estado -->
        <section>
            <img id="marco" src="img/movil.png" alt="celular">
            <div class="fondo_marco"></div>
            <div class="cell">
                    <i class="icon icon-back"></i>
                    <i class="icon icon-home-circled"></i>
                    <i class="icon icon-clone"></i>
            </div>
            <div id="pantalla">

                <?php
                    if(isset($_SESSION['usuarioId'])){
                        echo '<p id="estado">Bienvenido '.$_SESSION['usuarioNom'].'</p>';
                    }else{
                        echo '<p id="estado">No eres bienvenido</p>';
                    }                    
                ?> 
            </div>
        </section>
        <div class="registro sesionoculta" id="registro">
            <ul>
                <?php
                    if(isset($_SESSION['usuarioId'])){
                        echo '<li><a href="#" id="cerrar">Cerrar Sesion</a></li>';
                    }else{
                        echo '<li><a href="#" id="iniciar">iniciar sesion</a></li>';
                        echo '<li><a href="#" id="registrar">registrarme</a></li>';
                    }
                ?> 
            </ul>
        </div>
    </main>
    <!-- formulario para registrarse o iniciar sesion -->
	<div class="wrapper fadeInDown oculto" id="form">
		<div id="formContent">
		  <!-- Tabs Titles -->
		  <h2 class="active" id="h2_iniciar"> iniciar </h2>
		  <h2 class="inactive underlineHover" id="h2_registrar">registrar </h2>
	  
		  <!-- Icon -->
		  <div class="fadeIn first">
			<img src="img/user.png" id="icon" alt="User Icon" />
		  </div>
	  
		  <!-- Login Form -->
		  <form id="inisiarSesion" method="POST" action="login.php">
			<input type="text" id="iniciar_usuario" class="fadeIn second" name="nombre" placeholder="nombre de usuario"required>
			<input type="password" id="password" class="fadeIn third" name="contrasena" placeholder="contraseña" required>
			<input type="submit" class="fadeIn fourth" id="boton" value="iniciar" >
		  </form>
		  <!-- registrarse -->
		  <form class="oculto" method="POST" action="agregar.php" id="registrarUsuario" >
			<input type="text" id="registrar_user" class="fadeIn second" name="nombre" placeholder="nombre de usuario" required>
			<input type="password" id="registrar_password" class="fadeIn third" name="contrasena" placeholder="contraseña" required>
			<input type="text" id="Registrar_Discord" class="fadeIn second" name="usser" placeholder="usuario de Discord" required>
			<input type="submit" class="fadeIn fourth" id="boton2" value="registrarme" >
		  </form>
	    <!-- mensaje de error -->
      <p id="error" class="error oculto"></p>

		  <!-- Remind Passowrd -->
		  <div id="formFooter">
			<a class="underlineHover" href="#" id="para_recuperar_pass">has olvidado la contraseña</a> <br>
			<a class="underlineHover" href="#" id="para_registrarme">no tienes cuenta?</a>
			<a class="oculto underlineHover" href="#" id="para_iniciar">ya tienes cuenta?</a>
		  </div>
	  
		</div>
	  </div>
    
</body>

</html>