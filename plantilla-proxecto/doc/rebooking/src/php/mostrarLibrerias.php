<?php 
header('Content-Type: application/json');
require "conexionBD.php";

$librerias=[];

$conexionBD->set_charset("utf8mb4");
$consultaMostrarLibrerias = $conexionBD->query("SELECT * FROM librerias");

while ($row = mysqli_fetch_array($consultaMostrarLibrerias, MYSQLI_ASSOC)) {
    $librerias[] = array_map(function($valor) {
        return mb_convert_encoding($valor, 'UTF-8', 'auto');
    }, $row);
}

$jsonData="../../data/db.json";


$data=json_encode(['librerias'=>$librerias], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

echo $data;

if($fp=fopen($jsonData,"w")){
     fwrite($fp, $data);
 }
 fClose($fp);

?>