<?php session_start();
session_destroy(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <meta http-equiv="refresh" content="0.5"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Loogin</title>
</head>
<body ><!--class="y05Um" -->
    <div class="dimPan cajPrin"> <!--uc81Ff wKBl8c, dimPan cajPrin -->
        <div class="LJtPoc qmmlRd" style="background-color: #fff;"> <!-- LJtPoc qmmlRd, -->
            <div class="bdf4dc"> <!-- bdf4dc -->
                <div>
                    <form class="RFjuSb bxPAYd k6Zj8d" id="formLogin" >
                        <label id="usernameLabel" for="username">Nombre de usuario:</label>
                        <input type="text" name="username" id="username" placeholder="Ingrese su usuario" >
                        <label id="passwordLabel" for="password">Contraseña:</label>
                        <input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
                        <input type="submit" name="enviar" id="enviar" value="Iniciar sesión">
                        <input type="submit" name="recuperarPass" id="recuperarPass" value="Recuperar contraseña">
                        <!-- <span class="registrarse">¿No te has registrado? <a href="#">Registrese</a></span> -->
                    </form>
                </div>
            </div> 
			
        </div> <!-- class row -->        
    </div><!-- class container method="post" action="piechpi/procesador.php" -->  
    <script  src="js/jquery.js"></script>
    <script  src="js/main.js"></script>

</body>
</html>