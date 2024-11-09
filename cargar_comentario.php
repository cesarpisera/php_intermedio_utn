<?php

date_default_timezone_set("America/Argentina/Buenos_Aires");
$fecha_actual = new DateTime();

$formatter = new IntlDateFormatter(
    'es_ES',
    IntlDateFormatter::FULL,
    IntlDateFormatter::SHORT
);

$texto =
    "<div class='caja_comentarios'><h4> Nombre: </h4><h3><b>" . $_POST['nombre'] . "</b></h3>\n" .
    "<h4>Apellido: </h4><h3><b>" . $_POST['apellido'] . "</b></h3>" . "\n" .
    "<p> <u>Comentario:</u> " . $_POST['msj'] . "</p>\n<br>" .
    "<h5>" . "Comentario enviado el: " . $formatter->format(new DateTime()) . "</h5>\n<br> </div>";

$archivo = fopen('comentarios.txt', 'a');
fputs($archivo, $texto);

echo ("<p> ¡Comentario enviado! </p>");
echo ("<a href='comentarios.php'>Haz click aqui para volver a la sección comentarios</a>");
