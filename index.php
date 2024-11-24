<?php
include('header.php');

session_start();

//Verificar si hay un mensaje y mostrarlo

if (isset($_SESSION['mensaje'])){
    echo '<p>' . $_SESSION['mensaje']  . '</p>';
    //limpia el mensaje despues de mostrarlo
    unset($_SESSION['mensaje']);
}

?>

    <section class="contenedor_ingreso">
        <h3>Iniciar sesión</h3>
        <form action="validar.php" method="post" class="formulario">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" placeholder="Usuario">
            <label for="clave">Contraseña</label>
            <input type="password" name="clave" placeholder="Contraseña">
            <input type="submit" value="Ingresar">
        </form>

        <?php
        if (isset($_GET['error'])) {
            echo "<h3>Datos incorrectos</h3>";
        }
        ?>
    </section>

</body>

</html>