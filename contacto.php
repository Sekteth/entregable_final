<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/styles.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
    </style>
    <style>
        /* Estilos para títulos y textos */
        h1 {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 400;
            font-size: 24px;
            text-align: center;
        }
        
        p {
            font-family: 'PT Sans Narrow', sans-serif;
            font-weight: 400;
            font-size: 16px;
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
    <?php include 'navbar.php'; ?>
    
    <!-- Contenido de Contacto -->
    <div class="container">
        <!-- Formulario de contacto -->
        <h1>Contacto</h1>
        <p>Por favor, complete el formulario a continuación:</p>
        
        <form action="create.php" method="POST">
            <input type="text" name="nombre" placeholder="Ingrese su nombre completo" required>
            <input type="text" name="direccion" placeholder="Dirección de residencia" required>
            <input type="text" name="telefono" placeholder="Teléfono, si no tiene actualmente colocar: No tengo" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="ciudad" placeholder="Ciudad" required>
            <input type="submit" value="Registrar">
        </form>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
