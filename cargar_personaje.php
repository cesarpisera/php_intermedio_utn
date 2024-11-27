<?php

session_start();

$codigo_captcha = $_POST['captcha'];

if($codigo_captcha == $_SESSION['codigo_captcha']) {

include("conexion.php");

$nombre_per = $_POST['nombre'];
$apellido_per = $_POST['apellido'];
$imagen_per = $_POST['imagen'];
$descripcion_per = $_POST['descripcion'];

mysqli_query($conexion_db, "INSERT INTO personajes_onepiece2 VALUES(DEFAULT, '$nombre_per', 
'$apellido_per', '$imagen_per', '$descripcion_per')");

mysqli_close($conexion_db);

header("Location:cargar.php?ok");

} else {
    header("Location:cargar.php?error_codigo");
}