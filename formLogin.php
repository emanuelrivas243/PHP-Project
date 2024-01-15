<?php

    /* Impresion de informacion, a partir de los datos del metodo POST */
    if($_POST) {
        $correo = $_POST['fcorreo'];
        $contrasena = $_POST['fcontrasena'];

        echo 'Hola Emanuel! ' . $correo . ' ' . $contrasena;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Inicio de Sesion Spotify</h2>
    <form action="formLogin.php" method="post">
        <label for="correo">Correo:</label>
        <input type="text" id="correo" name="fcorreo"><br>
        <label for="contrasena">Contraseña</label>
        <input type="text" id="contrasena" name="fcontrasena"><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>