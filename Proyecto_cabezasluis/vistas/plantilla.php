<!doctype html>
<html lang="en">

<head>
  <title>Vote X food</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link rel="icon" type="image/x-icon" href="vistas/img/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="vistas\generales\img\RPC-JP_Logo.png" type="image/x-icon">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Minified JS library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Compiled and minified Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8a284c; margin: 0em 0 2em;">
    <div class="container-fluid">
      <img class="navbar-brand" src="vistas/img/icono.png" width="65" height="85">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="?controlador=paginas&accion=inicio">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?controlador=usuarios&accion=login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?controlador=usuarios&accion=crear">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?controlador=usuarios&accion=registro">Usuarios</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php
        include_once("controladores/controlador_" . $controlador . ".php");

        $objControlador = "Controlador" . ucfirst($controlador);

        if (class_exists($objControlador)) {
          $controlador = new $objControlador();

          if (method_exists($controlador, $accion)) {
            $controlador->$accion();
          } else {
            // Redirigir a la página de error 404 personalizada
            header("HTTP/1.0 404 Not Found");
            include_once("vistas/paginas/error.php");
          }
        } else {
          // Redirigir a la página de error 404 personalizada
          header("HTTP/1.0 404 Not Found");
          include_once("vistas/paginas/error.php");
        }
        ?>


      </div>
    </div>
    <footer>
      <?php include_once("vistas/paginas/footer.php") ?>
    </footer>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"></script>

</body>

</html>