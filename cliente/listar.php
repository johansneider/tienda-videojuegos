<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda_videojuegos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM cliente";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Bootstrap -->
  <link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
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
          <a class="nav-link" href="#">Alquilar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Reportes</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestionar</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../juegos/listar.php">Juegos</a>
            <a class="dropdown-item" href="../cliente/listar.php">Clientes</a>
            <a class="dropdown-item" href="../alquiler/listar.php">Alquiler</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../tecnologia/listar.php">Tecnologias</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container mt-2">
    <div class="row">
      <h1> Clientes</h1>
      <a class="btn btn-primary" href="agregar.php" role="button">Agregar</a>
      <div class="col-12">
        <div class="jumbotron row justify-content-center">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Direccion</th>
                <th scope="col">Celular</th>
                <th scope="col">Eliminar</th>
                <th scope="col">Editar</th>
              </tr>
            </thead>
            <tbody>
              <?php


              if ($result->num_rows > 0) {
                // output data of each row
                $i = 0;
                while ($row = $result->fetch_assoc()) {
                  $i++;
              ?>
                  <tr>
                    <th scope="row"><?php echo $i ?></th>
                    <td><?php echo $row["nombre"] ?></td>
                    <td><?php echo $row["apellido"] ?></td>
                    <td><?php echo $row["direccion"] ?></td>
                    <td><?php echo $row["celular"] ?></td>
                    <td>
                      <a class="btn btn-danger  btn-sm" href="agregar.php" role="button">Eliminar</a>
                    </td>
                    <td>
                      <a class="btn btn-warning  btn-sm" href="agregar.php" role="button">Editar</a>
                    </td>
                  </tr>
              <?php
                }
              } else {
                echo "0 results";
              }
              $conn->close();
              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <hr>
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
  <script src="../js/jquery-3.4.1.min.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap-4.4.1.js"></script>
</body>

</html>