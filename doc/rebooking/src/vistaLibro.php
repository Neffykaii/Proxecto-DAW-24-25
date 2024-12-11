<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/vistaLibro.js" defer></script>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/cards.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" rel="stylesheet">
    <script src="js/vistaLibro.js" defer></script>
 
    <title>Catálogo</title>
</head>
<body>
    <header>
        <ul>
            <li><img class="logo-base" src="./img/logo_base.png" alt="logotipo"></li>
        </ul>
        <ul class="menuPrincipal">
        <li><a href="index.php">Inicio</a></li>
            <li class="menuHover"><a href="catalogo.php">Catálogo</a></li>
            <li ><a href="librerias.php">Librerías</a></li>
        </ul>
        <?php
        if(isset($_SESSION['usuario'])){
            echo '<ul>
            <li><a href="espacio'.$_SESSION['tipoUser'].'.php"><i class="fa-regular fa-user userContorno"></i>
                <i class="fa-solid fa-user userHover"></i></a></li>
            <li><a href="php/logout.php"><button class="registrar">Cerrar sesión</button></a></li>
        </ul> ';
        }else{
            echo '<ul>
            <li><a href="loginForm.php"><i class="fa-regular fa-user userContorno"></i>
                <i class="fa-solid fa-user userHover"></i></a></li>
            <li><a href="registroForm.php"><button class="registrar">Registrarse</button></a></li>
        </ul> ';
        }
        ?>
    </header>
    <main>
        <section class="vista-libro">
          <!-- template-libreria -->  
        </section>
    </main>

    <template id="template-lista-libros">
        
        <article class="libro">
            <img src="" alt="">
            <p class="nombre"></p>
            <p class="autor"></p>
        </article>
      </template>

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