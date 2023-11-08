<?php
$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtusuario = (isset($_POST['txtusuario'])) ? $_POST['txtusuario'] : "";
$txtapellido = (isset($_POST['txtapellido'])) ? $_POST['txtapellido'] : "";
$txtContrasena =(isset($_POST['txtContrasena'])) ? $_POST['txtContrasena'] : "";
$claveCifrada = password_hash($txtContrasena, PASSWORD_DEFAULT);
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

include('administrador/bd.php');

if($accion){
    $sentenciaSQL = $conexion->prepare("INSERT INTO registro (nombre, apellido, usuario, contrasena) VALUES (:nombre,:apellido,:usuario, :contrasena);");
    $sentenciaSQL->bindParam(':nombre', $txtNombre);
    $sentenciaSQL->bindParam(':apellido', $txtapellido);
    $sentenciaSQL->bindParam(':usuario', $txtusuario);
    $sentenciaSQL->bindParam(':contrasena', $claveCifrada);
    $sentenciaSQL->execute();
    header("location:hola.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registro2.css">
</head>
    <header class="cabeza">
        <div style="text-align: center;">
            <img class="logo" src="imagenes/logolindo.png" alt="logo">
        </div>
    </header>
    <form action="hola.php" method="post">
        <section class="inicio">
            <h2>Registrarse</h2>
            <input class="controls"  type="text" name="txtNombre" placeholder="nombre" id="txtNombre"required>
            <input class="controls"  type="text" name="txtapellido"placeholder="apellido" id="txtapellido"required>
            <input class="controls"  type="text" name="txtusuario" placeholder="usuario" id="txtusuario"required>
            <input class="controls" type="password" name="txtcontrasena"placeholder="contrasena" id="txtcontrasena"required>
            <input class="buttons" type="submit" name="accion" value="Ingresar">
        </section>
    </form>

</body>
</html>