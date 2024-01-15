<?php

    /**
     * Conectarnos a la base de datos
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

        #$insertSQL = "INSERT INTO `album` (`id`, `nombre`, `genero`, `artista`) VALUES (NULL, 'My Beautiful Dark Twisted Fantasy', 'Rap', 'Kanye West');";
        $insertSQL = "INSERT INTO `album` (`id`, `nombre`, `genero`, `artista`) VALUES (NULL, 'Blonde', 'R&B', 'Frank Ocean');";
        $insertSQL2 = "INSERT INTO `album` (`id`, `nombre`, `genero`, `artista`) VALUES (NULL, 'Flower Boy', 'Rap', 'Tyler, The Creator');";

        $db->exec($insertSQL2);
        $db->exec($insertSQL);
        echo "Conexión establecida";

    } catch (PDOException $error) {
        //throw $error;
        echo "Conexión erronea: " . $error->getMessage();
    }



?>