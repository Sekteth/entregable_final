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

// Consulta SQL para obtener los registros
$sql = "SELECT * FROM contacto";
$result = $conn->query($sql);

// Estilos CSS para la tabla
echo "<style>
    table {
        width: 80%;
        margin: 0 auto; /* Centrar la tabla horizontalmente */
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid #ccc;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2; /* Color de fondo para las celdas de encabezado */
    }

    tr:nth-child(even) {
        background-color: #f2f2f2; /* Color de fondo para filas pares */
    }
</style>";

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Ciudad</th>
                <th>Acciones</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["nombre"]."</td>
                <td>".$row["direccion"]."</td>
                <td>".$row["telefono"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["ciudad"]."</td>
                <td>
                    <a href='update.php?id=".$row["id"]."'>Editar</a>
                    <a href='delete.php?id=".$row["id"]."'>Eliminar</a>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron registros.";
}

$conn->close();
?>
