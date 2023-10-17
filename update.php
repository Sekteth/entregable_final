<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
    <link rel="stylesheet" href="css/styles.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    
    <style>
        /* Estilos para títulos y textos */
        h1 {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 400;
            font-size: 24px;
            text-align: center;
        }
        
        /* Estilos para el formulario */
        form {
            max-width: 500px;
            margin: 0 auto;
        }
        
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        input[type="submit"] {
            background-color: black;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    
    <!-- Contenido de Actualizar Usuario -->
    <div class="container">
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

        // Obtener el ID del usuario a actualizar
        $id = $_GET['id'];

        // Consulta SQL para obtener los datos del usuario
        $sql = "SELECT * FROM contacto WHERE id='$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        ?>
        <!-- Formulario de actualización de usuario -->
        <h1>Actualizar Usuario</h1>
        <form action="update_process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $row["nombre"]; ?>" required>
            <input type="text" name="direccion" placeholder="Dirección de residencia" value="<?php echo $row["direccion"]; ?>" required>
            <input type="text" name="telefono" placeholder="Teléfono" value="<?php echo $row["telefono"]; ?>" required>
            <input type="email" name="email" placeholder="Email" value="<?php echo $row["email"]; ?>" required>
            <input type="text" name="ciudad" placeholder="Ciudad" value="<?php echo $row["ciudad"]; ?>" required>
            <input type="submit" value="Actualizar">
        </form>
        <?php
        } else {
            echo "Usuario no encontrado.";
        }

        $conn->close();
        ?>
    </div>

    </body>
</html>
