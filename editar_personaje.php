<?php

session_start();

//Verificar si hay un mensaje y mostrarlo

if (!isset($_SESSION['admin'])) {
    $_SESSION['mensaje'] = '<p class="necesario_iniciar">Es necesario iniciar sesión para acceder a esta funcionalidad</p>';
    header("Location:index.php");
    exit();
}


include("conexion.php");
$id_personaje = $_GET['id'];



mysqli_query($conexion_db, "UPDATE personajes_onepiece2 SET tipo = '<strong>Chequeado</strong>' WHERE id=$id_personaje");



header("Location:ver_personaje.php");