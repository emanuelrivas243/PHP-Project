<?php

    /**
     * Variables de sesión
     */

    // Obligatorio, es necesario para iniciar la sesión
    session_start();

    // Crear sesión -> Aqui estamos usando variables de sesion
    $_SESSION['usuario'] = "GamerLink243";
    $_SESSION['contrasena'] = "mariobros243";
    $_SESSION['estatus'] = "Logueado";

    echo "Sesion Iniciada" . ":<br/>";
    echo $_SESSION['usuario'] . ", estatus: " . $_SESSION['estatus'];


?>