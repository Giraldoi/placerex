<?php
$host="localhost";
$bd="placerex";
$usuario="root";
$contraseña="";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd", $usuario,$contraseña);
    //if($conexion){echo "Conectado... a sistema ";}
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>