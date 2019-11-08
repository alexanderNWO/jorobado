<?php
                  $nombre = $_POST['nombre'];
$apellido_p = $_POST['apellido_p'];
$apellido_m = $_POST['apellido_m'];
              $edad = $_POST['edad'];
              $sexo = $_POST['sexo'];
              $telefono = $_POST['telefono'];
              $licencia = $_POST['licencia'];
              $email = $_POST['email'];
$contrase = $_POST['contrase'];


$servername="mysql.proyectostic.online";
$username="alejandro6725825";
$password="alejandro8356000";
$dbname='rentacarbase';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO clientes (nombre, ap_paterno, ap_materno, edad, sexo, telefono, no_licencia, correo, contrasena)
VALUES ('$nombre', '$apellido_p', '$apellido_m', $edad, '$sexo', '$telefono', '$licencia', '$email', '$contrase')";

if ($conn->query($sql) === TRUE) {

header("Location: verificar.php");

} else {

header("Location: index.html");
}


$conn->close();
?>
