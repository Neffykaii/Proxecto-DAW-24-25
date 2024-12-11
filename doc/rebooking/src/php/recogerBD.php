<?php 
header('Content-Type: application/json');
require "conexionBD.php";

$libros=[];
$librerias=[];
$acciones=[];

$conexionBD->set_charset("utf8mb4");

$consultaMostrarLibros = $conexionBD->query("SELECT * FROM libros");

while ($row = mysqli_fetch_array($consultaMostrarLibros, MYSQLI_ASSOC)) {
    $libros[] = array_map(function($valor) {
        return mb_convert_encoding($valor, 'UTF-8', 'auto');
    }, $row);
}

$consultaMostrarLibrerias = $conexionBD->query("SELECT * FROM librerias");

while ($row = mysqli_fetch_array($consultaMostrarLibrerias, MYSQLI_ASSOC)) {
    $librerias[] = array_map(function($valor) {
        return mb_convert_encoding($valor, 'UTF-8', 'auto');
    }, $row);
}

$consultaMostrarAcciones = $conexionBD->query("SELECT * FROM acciones");

while ($row = mysqli_fetch_array($consultaMostrarAcciones, MYSQLI_ASSOC)) {
    $acciones[] = array_map(function($valor) {
        return mb_convert_encoding($valor, 'UTF-8', 'auto');
    }, $row);
}

$jsonData="../../data/db.json";


$data=json_encode(['libros'=>$libros,'librerias'=>$librerias,'acciones'=>$acciones], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

echo $data;

if($fp=fopen($jsonData,"w")){
     fwrite($fp, $data);
 }
 fClose($fp);

?>