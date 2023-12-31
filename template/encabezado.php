<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/menucss/encabezado.css">
    <title>Menu placerex</title>
</head>
<body class="vh-100 overflow-hidden">
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PLACEREX</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Placerex</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="php/inicio.php">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="php/hola.php">Registrarse</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="php/quienessomos.php">¿Quienes somos?</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="php/chat.php">¡Habla con nosotras!</a>
                </li>

                    <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  ¿Qué deseas aprender?
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="php/Contenidos/higpersonal.php">Higiene Personal</a></li>
                    <li><a class="dropdown-item" href="php/Contenidos/embarazo.php">Embarazo adolescente</a></li>
                    <li><a class="dropdown-item" href="php/Contenidos/metanticonceptivos.php">Métodos Anticonceptivos</a></li>
                    <li><a class="dropdown-item" href="php/Contenidos/enftransmision.php">Efermedades De Transmisión Sexual</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Más información</a></li>
                  </ul>

                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Entre Nosotros.
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="php/Videos/interactivos.php">Videos Interactivos</a></li>
                    <li><a class="dropdown-item" href="php/Videos/animados.php">Videos Animados</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Más información</a></li>
                  </ul>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
              </form>
            </div>
          </div>
        </div>

<!--PIE DE PAGINA-->

      </nav>  
</body>
</html>