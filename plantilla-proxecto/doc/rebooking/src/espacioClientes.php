<?php
session_start();
$user=$_SESSION['usuario'];
require 'php/conexionBD.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/espacio.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" rel="stylesheet">
 
    <title>Mi espacio</title>
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
    <div id="session-info" data-nombre="<?php echo $user; ?>"></div>
        <h2>Mi espacio</h2>
        <h3>Mis compras</h3>
        <article class="listaCompra">
            <?php
            $conexionBD->set_charset("utf8mb4");
                $consultaId = $conexionBD->query("SELECT idCliente FROM clientes WHERE nombreSesion='$user'");
                $row = mysqli_fetch_array($consultaId, MYSQLI_ASSOC);
                $id=$row['idCliente'];
                $consultaCompra = $conexionBD->query("SELECT * FROM libros WHERE idLibro IN(SELECT idLibro FROM acciones WHERE idCliente=$id AND tipoAccion='compra')");
                echo'<table><thead><th>Título</th><th>Autor</th><th>ISBN</th><th>Género</th><th>Idioma</th><th>Año de publicación</th></thead><tbody>';
                while ($row = mysqli_fetch_array($consultaCompra, MYSQLI_ASSOC)){
                    echo '
                    <tr><td>'.$row['nombreLibro'].'</td><td>'.$row['nombreAutor'].'</td><td>'.$row['isbnLibro'].'</td><td>'.$row['generoLibro'].'</td><td>'.$row['idiomaLibro'].'</td><td>'.$row['anoPublicacion'].'</td></tr>
                    ';
                }
                echo'</tbody></table>';

            ?>
        </article>
        <h3>Mis préstamos</h3>
        <article class="listaPrestamo">
        <?php
                $consultaPrestamo = $conexionBD->query("SELECT * FROM libros WHERE idLibro IN(SELECT idLibro FROM acciones WHERE idCliente=$id AND tipoAccion='prestamo')");
                echo'<table><thead><th>Título</th><th>Autor</th><th>ISBN</th><th>Género</th><th>Idioma</th><th>Año de publicación</th></thead><tbody>';
                while ($row = mysqli_fetch_array($consultaPrestamo, MYSQLI_ASSOC)){
                    echo '
                    <tr><td>'.$row['nombreLibro'].'</td><td>'.$row['nombreAutor'].'</td><td>'.$row['isbnLibro'].'</td><td>'.$row['generoLibro'].'</td><td>'.$row['idiomaLibro'].'</td><td>'.$row['anoPublicacion'].'</td></tr>
                    ';
                }
                echo'</tbody></table>';

            ?> 
        </article>
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