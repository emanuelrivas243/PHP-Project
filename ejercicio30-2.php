<?php

    // Puedo usar $_SESSION aqui aunque esté en otro archivo
    // Ya que $_SESSION es una variable global
    session_start();
    if(isset($_SESSION['usuario'])) {
        echo $_SESSION['usuario'] . ", estatus: " . $_SESSION['estatus'];
    } else {
        echo "No hay datos";
    }

?>