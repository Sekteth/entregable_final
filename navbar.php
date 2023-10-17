<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
    </style>
    <style>
        .navbar {
            background-color: black;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .navbar a {
            text-decoration: none;
            color: white;
            margin: 0 15px;
        }
        .navbar a:hover {
            color: purple;
        }
        .admin-link {
            color: white;
            text-decoration: none;
        }
        .admin-link:hover {
            color: purple;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="inicio.php">Inicio</a>
        <a href="nosotros.php">Nosotros</a>
        <a href="saludmental.php">Salud Mental</a>
        <a href="datosdeinteres.php">Datos de Interés</a>
        <a href="contacto.php">Contacto</a>
        <?php
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
            // Realiza la verificación de la contraseña
            if ($password === "per5efone") {
                header("Location: read.php"); // Redirige a read.php si la contraseña es correcta
            } else {
                header("Location: inicio.php"); // Redirige a la página de inicio en caso de contraseña incorrecta
            }
        } else {
            // Muestra el formulario de contraseña con el botón "Admin"
            echo '<form method="POST" action="">';
            echo '<input type="password" name="password" placeholder="Contraseña">';
            echo '<input type="submit" name="admin" value="Admin">';
            echo '</form>';
        }
        ?>
    </div>
</body>
</html>
