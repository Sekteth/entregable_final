<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cont";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recopilar datos del formulario de actualización
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$ciudad = $_POST['ciudad'];

// Actualizar datos en la tabla "contacto"
$sql = "UPDATE contacto SET nombre='$nombre', direccion='$direccion', telefono='$telefono', email='$email', ciudad='$ciudad' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    // Redirigir a read.php después de la actualización
    header("Location: read.php");
    exit();
} else {
    echo "Error al actualizar: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
