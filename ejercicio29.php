<?php

    /**
     * Leer datos de MySQL con PHP
     */

    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";

    try {

        #$conexion = new PDO("mysql:host = $servidor; dbname=albumes", $usuario, $contrasena);
        $db = new PDO("mysql:host=$servidor; dbname=albumes", $usuario, $contrasena);
        /**
         * Al pensar en el setAtributes, es mejor pensarlo así: setAttribute(ATTRIBUTE, OPTION);
         * en setAtributes, elegimos el atributo o propiedad que queremos que tenga la conexión (instanciada o creada),
         * y también el modo en que queremos que sea esa propiedad
         * En este caso, queremos que la conexión tenga la propiedad de que tenga excepciones
         * Y la forma en que hace las excepciones (o el modo/opcion de hacerlo) es a través de excepciones
         * también está el modo de warning/advertencia 
         */
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM `album`";
        $sentence = $db->prepare($sql);
        $sentence->execute();

        $resultado = $sentence->fetchAll();
        
        // print_r($resultado);

        foreach($resultado as $album) {
            print_r($album['nombre'] . "<br>");
        }
        
    } catch (PDOException $error) {
        //throw $error;
        echo "Conexión erronea: " . $error->getMessage();
    }



?>