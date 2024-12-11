<?php
session_start();
require 'conexionBD.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user = trim($_POST['userNick']);
    $pass = trim($_POST['userPass']);
    $tipoUser = $_POST['rol'];

   /*  $consultaNombre = $conexionBD->query("SELECT passSesion FROM $tipoUser WHERE nombreSesion='$user'"); */

    $consultaLogin = $conexionBD->query("SELECT passSesion FROM $tipoUser WHERE nombreSesion='$user'");
  
         if($consultaLogin && $row = mysqli_fetch_array($consultaLogin, MYSQLI_ASSOC)){
            if ($row['passSesion']===$pass){
                $_SESSION['usuario']=$user;
                $_SESSION['tipoUser']=$tipoUser;
                header("Location:../index.php");
                exit();

            }else{
                $_SESSION['error']='Datos incorrectos';
                header("Location:../loginForm.php");
                exit();
            }
        }else{
            $_SESSION['error']='Datos incorrectos';
            header("Location:../loginForm.php");
            exit();
        }
                
    }


?>