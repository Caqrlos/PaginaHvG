<?php
$servername = "127.0.0.1"; 
$username = "root";
$password = "2245";
$dbname = "hvg";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Para el registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $uname = $_POST["uname"];
  $psw = $_POST["psw"];

  $sql = "INSERT INTO Usuarios (username, password)
  VALUES ('$uname', '$psw')";

  if ($conn->query($sql) === TRUE) {
    echo "Usuario registrado con éxito";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
