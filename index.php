<?php
include('header.php');
?>

    <section class="contenedor_cargar">
        <h3>Cargar Personajes</h3>
        <form action="cargar_personaje.php" method="post" class="formulario">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <input type="text" name="imagen" placeholder="Imagen">
            <textarea name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Describe al personaje"></textarea>
            <input type="submit" value="Cargar Personajes">
        </form>

        <?php
        if (isset($_GET['ok'])) {
            echo "<h3> Personaje cargado con éxito</h3>";
        }
        ?>
    </section>

</body>

</html>