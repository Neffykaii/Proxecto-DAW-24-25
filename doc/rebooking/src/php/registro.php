<?php
require("conexionBD.php");

function limpiar($var){
    $var=trim(strip_tags(stripslashes(htmlspecialchars($var))));
    return $var;
}


function obligatorios()
{
        if ((empty($_POST['userName'])) || (empty($_POST['userAdress'])) || (empty($_POST['userMail'])) || (empty($_POST['userNick'])) || (empty($_POST['userPass']))) {
            $_SESSION['error']='ERROR campo vacío';
            header("Location:../registroForm.php");
                exit();
        }
}

function validar()
{

        $validarNombre = '/^[a-zA-Z]*$/';
        $validarAdress = '/^[A-Za-z0-9\s]+$/';
        $validarMail='/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        $validarNick = '/^[A-Za-z0-9]+$/';
        if (!preg_match($validarNombre, $_POST['userName'])){
            $_SESSION['error']='Formato nombre incorrecto';
            header("Location:../registroForm.php");
                exit();
        }
        if (!preg_match($validarAdress, $_POST['userAdress'])){
            $_SESSION['error']='Formato dirección incorrecto';
            header("Location:../registroForm.php");
                exit();
        }
        if (!preg_match($validarMail, $_POST['userMail'])){
            $_SESSION['error']='Formato email incorrecto';
            header("Location:../registroForm.php");
                exit();
        }
        if (!preg_match($validarNick, $_POST['userNick'])){
            $_SESSION['error']='Formato nombre de usuario incorrecto';
            header("Location:../registroForm.php");
                exit();
        }
        if (!preg_match($validarNick, $_POST['userPass'])){
            $_SESSION['error']='Formato contraseña incorrecto';
            header("Location:../registroForm.php");
                exit();
        }
}

if (isset($_POST['registrarUser'])) {

    try{
        obligatorios();
        validar();

        $conexionBD->begin_transaction();

        $consultaInsertar=$conexionBD->prepare("INSERT INTO `clientes`(`nombreCliente`, `direccionCliente`, `mailCliente`, `nombreSesion`, `passSesion`) VALUES (?,?,?,?,?)");
        $consultaInsertar->bind_param('sssss',$nombreCliente,$direccionCliente,$mailCliente,$nombreSesionCliente,$passCliente);

        $nombreCliente=limpiar($_POST['userName']);
        $direccionCliente=limpiar($_POST['userAdress']);
        $mailCliente=limpiar($_POST['userMail']);
        $nombreSesionCliente=limpiar($_POST['userNick']);
        $passCliente=limpiar($_POST['userPass']);

        $consultaInsertar->execute();
        $conexionBD->commit();

        
        header("Location:../index.php");
                exit();
    
    }catch (Exception $e) {
        $conexionBD->rollback();
        echo "Error: " . $e->getMessage();
        die();
    }

   

}

?>