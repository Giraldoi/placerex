<?php
include('administrador/bd.php');


session_start();

$txtusuario = (isset($_POST['Usuario'])) ? $_POST['Usuario'] : "";
$txtcontrasena = (isset($_POST['Contrasena'])) ? $_POST['Contrasena'] : "";


$sentenciaSQL = $conexion->prepare("SELECT *FROM registro WHERE usuario=:usuario AND contrasena=:contrasena");
$sentenciaSQL->bindParam(':usuario', $txtusuario);
$sentenciaSQL->bindParam(':contrasena', $txtcontrasena);
$sentenciaSQL->execute();
$clint = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

if($clint){
    
    $_SESSION['Usuario']="ok";
    header('location:index.html');

         
    }elseif($_POST){ 
        if (($_POST['Usuario']==$txtusuario)&&($_POST['Contrasena']=="$txtcontrasena")) {
        $_SESSION['Usuario']="ok";
        $_SESSION['nombreUsuario']="Bohorquez";
        header('location:index.html');
    } 
    
    else{
        $mensaje="Error: El usuario o contraseña son incorrectos";
    }
}

?>

<!doctype html>
<html lang="es">
  <head>
    <title>Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="inicio.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <br><br><br>
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                    

                        <?php if(isset($mensaje)){ ?>
                        <div class="alert alert-primary" role="alert">
                            <?php echo $mensaje; ?>
                        </div>
                        <?php } ?>

                        <form method="POST">
                        <div class = "form-group">
                        <label>Usuario</label>
                        <input type="text" class="form-control" name="Usuario" placeholder="Escribe tu usuario">
                        </div>

                        <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" name="Contrasena" placeholder="Escribe tu contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                        
                        </form>
                        
                        
                        
                    </div>
                   
                    
                </div>
                
            </div>
            
        </div>
    </div>
      
   
  </body>
</html>