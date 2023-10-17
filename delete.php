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

// Obtener el ID del registro a eliminar
$id = $_GET['id'];

// Eliminar registro de la tabla "contacto"
$sql = "DELETE FROM contacto WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    // Redirige a read.php después de eliminar con éxito
    header("Location: read.php");
    exit(); // Detiene la ejecución del script después de la redirección
} else {
    echo "Error al eliminar: " . $sql . "<br>" . $conn->error;
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
