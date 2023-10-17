<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/styles.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
    </style>
    <style>
        .carousel-container {
            position: relative;
            max-width: 100%;
            overflow: hidden;
            margin-bottom: 20px;
            margin: 0 auto;
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .carousel-item {
            display: none;
            text-align: center;
        }

        .carousel-item img {
            max-width: 100%;
            height: auto;
        }

        .carousel-controls {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            z-index: 1;
            display: flex;
            justify-content: space-between;
        }

        .carousel-control {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            font-size: 24px;
            padding: 10px 20px;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .carousel-control:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .carousel-control-prev {
            margin-left: 20px;
        }

        .carousel-control-next {
            margin-right: 20px;
        }

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
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <!-- Contenido -->
    <div class="carousel-container">
        <!-- Agregar las bibliotecas de Bootstrap para el carrusel -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicadores -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="multimedia/imagen1.jpg" class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="multimedia/imagen2.jpg" class="d-block w-100" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="multimedia/imagen3.jpg" class="d-block w-100" alt="Imagen 3">
                </div>
                <div class="carousel-item">
                    <img src="multimedia/imagen4.jpg" class="d-block w-100" alt="Imagen 4">
                </div>
                <div class="carousel-item">
                    <img src="multimedia/imagen5.jpg" class="d-block w-100" alt="Imagen 5">
                </div>
            </div>
            <!-- Controles de navegación -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

    <div class="container">
        <!-- Sección 1 "¿Qué es un hogar protegido?" -->
        <h1>¿Qué es un hogar protegido?</h1>
        <p>Un hogar protegido es un espacio seguro y acogedor diseñado para brindar refugio y cuidado a personas que requieren asistencia especial o protección. Estos hogares están destinados a aquellos que pueden enfrentar desafíos físicos, emocionales o de salud, y buscan un entorno que les ofrezca apoyo constante y atención personalizada.</p>
        <p>En un hogar protegido, se prioriza el bienestar y la calidad de vida de sus residentes. Esto implica ofrecer servicios de atención médica, supervisión las 24 horas, y actividades adaptadas a las necesidades individuales. Estos hogares pueden ser especialmente relevantes para personas mayores, aquellas con discapacidades o quienes enfrentan situaciones de vulnerabilidad.</p>
        <p>La seguridad y la comodidad son pilares fundamentales de un hogar protegido. Se busca crear un ambiente donde los residentes se sientan protegidos, valorados y acompañados en su día a día. Esto puede incluir tanto la atención física como el apoyo emocional para promover una vida plena y feliz.</p>
        <p>Cada hogar protegido puede tener su enfoque y especialización, adaptándose a las necesidades específicas de sus residentes. Algunos se centran en brindar cuidados a personas mayores, mientras que otros pueden estar dirigidos a individuos con discapacidades cognitivas o problemas de salud mental. La diversidad de opciones garantiza que se pueda encontrar el lugar adecuado para cada persona.</p>
        <p>En resumen, un hogar protegido es mucho más que una residencia; es un espacio de apoyo y seguridad que se adapta a las necesidades individuales de sus residentes. Proporciona cuidados especializados, promueve la dignidad y mejora la calidad de vida de quienes lo llaman su hogar.</p>
        
        <!-- Sección 2 Video de YouTube -->
        <h1>Video: ¿Qué es un hogar protegido?</h1>
        <div class="text-center">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/sypapP0Yy34?si=CXKWEBPE2g4Hxsvx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="mx-auto"></iframe>
        </div>

        <!-- Sección 3 Mapa de googlemaps -->
        <h1>Nuestro hogar</h1>
        <div class="container text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3976.6683265935976!2d-74.00705572502105!3d4.653108695321711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNMKwMzknMTEuMiJOIDc0wrAwMCcxNi4xIlc!5e0!3m2!1ses!2sco!4v1694724326175!5m2!1ses!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mx-auto"></iframe>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
