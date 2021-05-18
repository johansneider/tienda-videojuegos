<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tienda de video juegos</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Tienda de Video Juegos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
        </li>



        <li class="nav-item">
          <a class="nav-link" href="#">Reportes</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestionar</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="juegos/listar.php">Juegos</a>
            <a class="dropdown-item" href="cliente/listar.php">Clientes</a>
            <a class="dropdown-item" href="alquiler/listar.php">Alquiler</a>
            <a class="dropdown-item" href="tecnologia/listar.php">Tecnologia</a>
            <div class="dropdown-divider"></div>

          </div>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container mt-2">
    <div class="row">
      <div class="col-12">
        <div class="jumbotron">
          <h1 class="text-center">TIENDA VIDEO JUEGOS</h1>
          <div class="row justify-content-center">

          </div>
          <p class="text-center">Aqui encontraras todo lo relacionado con video juegos. ( Xbox, PLayStation, Nintendo, PC, ...)</p>
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="css/imagenes/1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="css/imagenes/2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="css/imagenes/3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  </div>
  </div>
  </div>

  <footer class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p>JOHAN SNEIDER ACOSTA MANZANO</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap-4.4.1.js"></script>
</body>

</html>