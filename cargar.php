<?php
session_start();

//verificar si el usuario ha iniciado sesion
if (isset($_SESSION['admin'])) {

    include('header.php');

    // Codigo captcha

    $nro1 = rand(0, 9);
    $nro2 = rand(0, 9);
    $nro3 = rand(0, 9);
    $letra = array("A", "B", "C", "E", "X", "Y", "Z");
    $simbolo = array("$", "@", "/", "#", "=");
    $mezcla_letra = rand(0, 6);
    $mezcla_simbolo = rand(0, 4);

    $_SESSION['codigo_captcha'] = $nro1 . $letra[$mezcla_letra] . $nro2 . $simbolo[$mezcla_simbolo] . $nro3;

?>
    <h2>Bienvenido <?php echo $_SESSION['admin']; ?></h2>

    <section class="contenedor_cargar">
        <h3>Cargar Personajes</h3>
        <form action="cargar_personaje.php" method="post" class="formulario" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <select name="tipo" id="">
                <option selected disabled>Tipo de personaje</option>
                <option value="Personaje principal">Personaje principal</option>
                <option value="Personaje Secundario">Personaje Secundario</option>
            </select>
            <input type="file" name="imagen" placeholder="Imagen">
            <textarea name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Describe al personaje"></textarea>
            <div class="img_container">
            <img src="captcha.php" alt="captcha" class="img_captcha">
            </div>
            <input type="text" name="captcha" id="Ingresar captcha" placeholder="Ingresar captcha">
            <input type="submit" value="Cargar Personajes">
        </form>

    </section>

<?php
    if (isset($_GET['error_codigo'])) {
        echo "<h3> Código de verificación incorrecto</h3>";
    }
    if (isset($_GET['ok'])) {
        echo "<h3> Personaje cargado con éxito</h3>";
    }
    if (isset($_GET['error'])) {
        echo "<h3> Imagen incorrecta. Verifique formato y el tamaño (MAX. 500kb)</h3>";
    }
} else {
    header("Location:index.php");
}

?>

</body>

</html>