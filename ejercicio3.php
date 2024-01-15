<?php

    /*
    if($_GET) {
        $nombre = $_GET['nombre'];
        echo 'Hola ' . $nombre;

    }
    */

    if($_GET['nombre'] == 'Arturo') {
        $nombre = $_GET['nombre'];
        echo 'Hola Arturo =vvv, probando el elseif';
    }

    elseif($_GET['nombre'] == 'Emily') {
        $nombre = $_GET['nombre'];
        echo 'ola, este es tu resultado de busqueda Emily';
    }

    else {
        echo 'No existe ese resultado o no introduciste';
    }

?>