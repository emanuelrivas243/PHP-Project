<?php

    /**
     * Practica HTML Form Usuario y Juego Favorito de Silent Hill
     */

    $txtNombre = "";
    $txtApellido = "";
    $txtUsuario = "";
    $txtContrasena = "";
    $txtJuego = "";

    if ($_POST) {

        $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
        $txtApellido = (isset($_POST['txtApellido'])) ? $_POST['txtApellido'] : "";
        $txtUsuario = (isset($_POST['txtUsuario'])) ? $_POST['txtUsuario'] : "";
        $txtContrasena = (isset($_POST['txtContrasena'])) ? $_POST['txtContrasena'] : "";
        $txtJuego = (isset($_POST['txtJuego'])) ? $_POST['txtJuego'] : "";

    }
    

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de Usuarios</title>
</head>
<body>

    <?php if($_POST){ ?>
        <strong>Hola</strong>: <?php echo $txtNombre; ?>
        <br>
        <strong>Tu juego favorito de Silent Hill: </strong> <?php echo $txtJuego;?>
    <?php } ?>

    <form action="ejercicio31.php" method="post">
        Nombre:
        <input type="text" value="<?php echo $txtNombre?>" name="txtNombre"><br/>
        Apellido:
        <input type="text" value="<?php echo $txtApellido?>" name="txtApellido"><br/>
        Username:
        <input type="text" value="<?php echo $txtUsuario?>" name="txtUsuario"><br/>
        <!--<label for="idjf">Juego Favorito:</label> -->
        <legend>Selecciona tu juego favorito de Silent Hill:</legend>
            <input type="radio" <?php echo ($txtJuego == "Silent Hill") ? "checked" : ""; ?> name="txtJuego" checked id="sh" value="Silent Hill">
            <label for="sh">Silent Hill</label>

            <input type="radio" <?php echo ($txtJuego == "Silent Hill 2") ? "checked" : ""; ?> name="txtJuego" value="Silent Hill 2" id="sh2">
            <label for="sh2">Silent Hill 2</label>

            <input type="radio" <?php echo ($txtJuego == "Silent Hill 3") ? "checked" : ""; ?> name="txtJuego" value="Silent Hill 3" id="sh3">
            <label for="sh3">Silent Hill 3</label>
            <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>