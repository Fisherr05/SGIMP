<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <!-- NAVIGATION  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.html">
          <img class="img-responsive logo img-thumbnail " alt="" width="150px" height="150px" src="img/logo.png">
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="persona.php">Usuarios</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="actividad.php">Actividades</a>
              </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Archivos</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Iniciar sesión</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</body>
</html>

<script type="text/javascript">
    $(window).scroll(function() {
      if ($(document).scrollTop() > 150) {
        $('.logo').height(200);
  
      }
      else {
        $('.logo').height(100);
      }
    }
    );
  </script>