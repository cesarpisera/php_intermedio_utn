<?php
include('header.php');
?>

    <section class="contenedor_personajes">

        <?php
        include("conexion.php");

        $consulta_db = mysqli_query($conexion_db, "SELECT * FROM personajes_onepiece2");
        while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)) {
        ?>
            <div class="caja_personajes">
                <h2>
                    <?php
                    echo $mostrar_datos['nombre'] . " " . $mostrar_datos['apellido']
                    ?>
                </h2>
                <img src="imagenes/<?php echo $mostrar_datos['imagen'] ?>" alt="<?php echo $mostrar_datos['nombre'] ?>">
                <p><?php echo $mostrar_datos['descripcion']; ?></p>
                <a href="eliminar_personaje.php?id=<?php echo $mostrar_datos['id'] ?>">Eliminar personaje</a>
            </div>

        <?php }    ?>

    </section>

    </body>

</html>