<?php
    session_start();
    $error = $_SESSION['error'] ?? '';
    unset($_SESSION['error']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrate</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/formularios.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" rel="stylesheet">
</head>
<body>
<header>
        <ul>
            <li><img class="logo-base" src="./img/logo_base.png" alt="logotipo"></li>
        </ul>
        <ul class="menuPrincipal">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="catalogo.php">Catálogo</a></li>
            <li><a href="librerias.php">Librerías</a></li>
            
        </ul>
        <ul>
            <li><a href="loginForm.php"><i class="fa-regular fa-user userContorno"></i>
                <i class="fa-solid fa-user userHover"></i></a></li>
            <li><a href="registroForm.php"><button class="registrar">Registrarse</button></a></li>
        </ul>
    </header>
    <main>
        <h2>Registro</h2>
        <?php
    if ($error){
        echo '<p style="color: red;"> '.$error.' </p>';
    }
    ?>
        <form id="formRegistro" action="php/registro.php" method="post">
                <p>
                    <label for="userName">Nombre:</label>
                    <input type="text" name="userName" id="userName">
                </p>
                <p>
                    <label for="userAdress">dirección:</label>
                    <input type="text" name="userAdress" id="userAdress">
                </p>
                <p>
                    <label for="userMail">Correo electrónico:</label>
                    <input type="email" name="userMail" id="userMail">
                </p>
                <p>
                    <label for="userNick">Nombre de usuario:</label>
                    <input type="text" name="userNick" id="userNick">
                </p>
                <p>
                    <label for="userPass">Contraseña:</label>
                    <input type="password" name="userPass" id="userPass">
                </p>       
            <p class="botonesForm">  
                <input type="submit" value="Registrar" name="registrarUser" id="registrarUser">
                <input type="reset" value="Borrar" name="borrar" id="borrar">
            </p>
            
        </form>
</main>
<footer>
        <div class="footerSuperior">
        <ul class="info">
            <li class="tituloFooter">Re:Booking</li>
            <li>Sobre nosotros</li>
            <li>Catálogo</li>
            <li>Librerías</li>
            <li>Suscripción</li>
        </ul>
        <ul class="aviso">
            <li class="tituloFooter">Información legal</li>
            <li>Aviso legal</li>
            <li>Política de privacidad</li>
            <li>Política de cookies</li>
        </ul>    
        <ul class="contacto">
            <li class="tituloFooter">Ayuda</li>
            <li>Contacta con nosotros</li>
            <li>Gastos de envío</li>
            <ul class="redes">
                <li>Encuentranos en:</li>
                <li>instagram</li>
                <li>facebook</li>
                <li>twitter</li>
            </ul>
        </ul>
        
        </div>
        <div class="footerInferior"><p>Cophyright Syl</p></div>
    </footer>
    
</body>
</html>