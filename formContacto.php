<?php

    /*
        Impresion de datos
        Obtención de datos desde metodo POST
    */

    if($_POST) {
        
        $nombre = $_POST['fcNombre'];
        $correo = $_POST['fcCorreo'];
        $mensaje = $_POST['fcMensaje'];
    
        echo $nombre;
        echo $correo;
        echo $mensaje;
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    <h2>Contacto</h2>
    <form action="formContacto.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="fcNombre">
        <br>
        <label for="correo">Correo:</label>
        <input type="text" id="correo" name="fcCorreo"><br>
        <label for="mensaje">Mensaje: </label>
        <textarea name="fcMensaje" id="mensaje" cols="50" rows="5"></textarea><br>
        <br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>