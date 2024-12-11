<?php
session_start();
require 'conexionBD.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!isset($_SESSION['usuario'])){
        header("Location:../loginForm.php");
        exit();
    }
    if(isset($_POST['compra'])){
        $accion='compra';
        $idAccion=$_POST['compra'];
    }else{
        $accion='prestamo';
        $idAccion=$_POST['prestamo'];
    }
    $user=$_SESSION['usuario'];

    $consultaId = $conexionBD->query("SELECT idCliente FROM clientes WHERE nombreSesion='$user'");
    $row = mysqli_fetch_array($consultaId, MYSQLI_ASSOC);
    $idUser=$row['idCliente'];
    echo $accion;

    $consultaInsertar= $conexionBD->query("SELECT idCliente FROM clientes WHERE nombreSesion='$user'");

    $consultaInsertar=$conexionBD->prepare("INSERT INTO `acciones`(`idLibro`, `idCliente`, `tipoAccion`) VALUES (?,?,?)");
    $consultaInsertar->bind_param('iis',$idAccion,$idUser,$accion);
    $consultaInsertar->execute();

    header("Location:../index.php");

}
?>