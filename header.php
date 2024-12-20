<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONE PIECE</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <header>
        <h1 class="titulo">Los Piratas de Sombrero de Paja</h1>
        <h2 class="titulo">ONE PIECE</h2>
        <nav>
            <ul class="menu_principal">
            <?php
             // Inicia la sesión
            if (isset($_SESSION['admin'])) {
                // Si la sesión está iniciada
                echo '<li><a href="cargar.php">Carga de personaje</a></li>';
                echo '<li><a href="ver_personaje.php">Ver personajes</a></li>';
                echo '<li><a href="comentarios.php">Comentarios</a></li>';
                echo '<li><a href="salir.php">Cerrar sesión</a></li>';
            } else {
                // Si la sesión no está iniciada
                echo '<li><a href="index.php">Iniciar sesión</a></li>';
            }
            ?>
            </ul>
            <br>
            <h4>
                <?php
                date_default_timezone_set("America/Argentina/Buenos_Aires");
                $fecha_actual = new DateTime();

                $formatter = new IntlDateFormatter(
                    'es_ES',
                    IntlDateFormatter::FULL,
                    IntlDateFormatter::SHORT
                );

                echo $formatter->format(new DateTime());
                ?>
            </h4>
        </nav>
    </header>