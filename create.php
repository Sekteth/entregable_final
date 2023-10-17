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

// Recopilar datos del formulario
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$ciudad = $_POST['ciudad'];

// Insertar datos en la tabla "contacto"
$sql = "INSERT INTO contacto (nombre, direccion, telefono, email, ciudad)
VALUES ('$nombre', '$direccion', '$telefono', '$email', '$ciudad')";

if ($conn->query($sql) === TRUE) {
    // Redirige a contacto.php después de un registro exitoso
    header("Location: contacto.php");
    exit(); // Detiene la ejecución del script después de la redirección
} else {
    echo "Error al registrar: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Encabezado HTML y otros estilos o recursos -->
</head>
<body>
    <?php include 'navbar.php'; ?>
    

    <?php include 'footer.php'; ?>
</body>
</html>
