<?php
include("conexion.php");
$id_personaje = $_GET['id'];



mysqli_query($conexion_db, "DELETE FROM personajes_onepiece WHERE id=$id_personaje");



header("Location:ver_personaje.php");