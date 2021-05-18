<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda_videojuegos";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO cliente (nombre, apellido, direccion, celular, correo)
VALUES ('$nombre', '$apellido', '$direccion', '$celular', '$correo' )";

if ($conn->query($sql) === TRUE) {
    header('Location: listar.php');
exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>