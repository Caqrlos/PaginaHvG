<?php
$servername = "127.0.0.1"; // Cambia esto a la dirección IP de tu servidor si no es local
$username = "root";
$password = "2245";
$dbname = "hvg";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
