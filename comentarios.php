<?php
session_start();

//verificar si el usuario ha iniciado sesion
if (isset($_SESSION['admin'])) {

    include('header.php');
?>
<section class="contenedor_comentarios">
<article class="contenedor_cargar_comentario">
    <h3>Envía tu comentario</h3>
    <form action="cargar_comentario.php" method="post" class="formulario">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="apellido" placeholder="Apellido">
        <textarea name="msj" id="descripcion" cols="30" rows="10 " placeholder="Deje aquí su comentario"></textarea>
        <input type="submit" value="Cargar Comentario">
    </form>
</article>

<article class="contenedor_cargar">
    <h3>Comentarios</h3>
    <?php
    $archivo = fopen('comentarios.txt', 'r');
    $tamanio = filesize('comentarios.txt');
    $contenido = fread($archivo, $tamanio);
    echo $contenido;

    $lineas = explode("<h3>", $contenido);
    $cantidadLineas = count($lineas);

    fclose($archivo);
}?>
</article>
</section>
</body>

</html>