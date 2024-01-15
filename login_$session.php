<?php

    if ($_POST) {
        session_start();
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['contrasena'] = $_POST['contrasena'];

        echo "Estás logueado :D <br>";
        echo $_SESSION['usuario'] . " | " . $_SESSION['contrasena'];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify's Login</title>
</head>
<body>
    <form action="login_$session.php" method="post">
        Usuario:
        <input type="text" name="usuario">
        <br/>
        Contraseña: 
        <input type="password" name="contrasena">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>