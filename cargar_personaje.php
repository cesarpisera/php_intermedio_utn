<?php

session_start();

$codigo_captcha = $_POST['captcha'];

if ($codigo_captcha == $_SESSION['codigo_captcha']) {

    include("conexion.php");

    $nombre_per = $_POST['nombre'];
    $apellido_per = $_POST['apellido'];
    // $imagen_per = $_POST['imagen'];
    $descripcion_per = $_POST['descripcion'];
    $tipo_per = $_POST['tipo'];
    // CARGA DE IMAGEN

    $nombre_img = $_FILES['imagen']['name'];
    $tamanio_img = $_FILES['imagen']['size'];
    $tipo_img = $_FILES['imagen']['type'];
    $tmp_img = $_FILES['imagen']['tmp_name'];

    $destino = 'imagenes/' . $nombre_img;

    if (($tipo_img != 'image/jpeg' && $tipo_img != 'image/jpg' && $tipo_img != 'image/png' && $tipo_img != 'image/gif') or $tamanio_img > 200000) {
        header('Location:cargar.php?error');
    } else {
        move_uploaded_file($tmp_img, $destino);


        mysqli_query($conexion_db, "INSERT INTO personajes_onepiece2 VALUES(DEFAULT, '$nombre_per', 
        '$apellido_per', '$tipo_per', '$nombre_img', '$descripcion_per')");

        header("Location:cargar.php?ok");
        mysqli_close($conexion_db);
    }
} else {
    header("Location:cargar.php?error_codigo");
}
