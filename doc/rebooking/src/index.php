<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="js/inicio.js" defer></script>
     <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/base.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" rel="stylesheet">
 
</head>
<body>
    <header>
        <ul>
            <li><img class="logo-base" src="./img/logo_base.png" alt="logotipo"></li>
        </ul>
        <ul class="menuPrincipal">
        <li class="menuHover"><a href="index.php">Inicio</a></li>
            <li><a href="catalogo.php">Catálogo</a></li>
            <li><a href="librerias.php">Librerías</a></li>
            
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
    <main class="contenido">
        <section class="portada">
            <div class="imagenPortada"></div>
            <div class="color1"></div>
            <div class="color2"></div>
            <div class="principal">
                <figure class="book-contenedor"><img src="./img/icons8-lazo-marcapáginas-1600.png" alt="marcapáginas portada">
                <div class="textoLogo">
                    <p><img class="logo-principal" src="./img/logo_base.png" alt="logotipo"></p>
                    <h2>Re:Booking</h2>
                </div>
            </figure>
            </div>
        </section>
        <h3>Sobre nosotros</h3>
        <section class="sobreNosotros">
            
            <article class="cardAbout">
                <figure class="img-contenedor">
                  <img src="./img/icons8-lazo-marcapáginas-60.png" class="bookmark-img" alt="imagen marcapáginas">
                </figure>
                <h4 class="nombre">Explora el catálogo</h4>
                <p class="info">Accede a nuestra gran sección de libros de todos los géneros y edades</p>
                <a href="" class="mas-btn"><i class="fa-solid fa-quote-left"></i>Saber más</a>
              </article>
              <article class="cardAbout">
                <figure class="img-contenedor">
                  <img src="./img/icons8-lazo-marcapáginas-60.png" class="bookmark-img" alt="imagen marcapáginas">
                </figure>
                <h4 class="nombre">Hazte con tu libro favorito</h4>
                <p class="info">Descubre las nuevas ventajas para comprar o alquilat cualquier libro que desees</p>
                <a href="" class="mas-btn"><i class="fa-solid fa-quote-left"></i>Saber más</a>
              </article>
              <article class="cardAbout">
                <figure class="img-contenedor">
                  <img src="./img/icons8-lazo-marcapáginas-60.png" class="bookmark-img" alt="imagen marcapáginas">
                </figure>
                <h4 class="nombre">Colabora con nuestras librerías</h4>
                <p class="info">Explora el listado de nuestros socios para saber donde encontrarlos y comunícate con ellos.</p>
                
                <a href="" class="mas-btn"><i class="fa-solid fa-quote-left"></i>Saber más</a>
              </article>
        </section>
        <section class="novedades">
            
        </section>
        <section class="masVendidos">

        </section>

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