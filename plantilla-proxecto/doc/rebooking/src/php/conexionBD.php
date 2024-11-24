<?php

$conexionBD = mysqli_connect('localhost', 'root', '');


$seleccionDB = mysqli_select_db($conexionBD, 'rebooking');


if (!$conexionBD) {
    echo ('Error número ' . mysqli_connect_errno() . 'al establecer la conexión' . mysqli_connect_error() . '.');
}
if (!$seleccionDB) {
    die('Not connected: ' . mysqli_connect_error());
} 

?>