<?php

    /**
     * Arrays Asociativos, through the index
     */

    // Ejercicio 1
    $arrayJuegos = [
        "z" => "Zelda Ocarina of Time",
        "s" => "Silent Hill 2",
        // "snes" => array("Chrono Trigger", "Final Fantasy VI"),
        "e" => "Earthbound",
        "snes" => "Final Fantasy VI",
    ];
    
    echo "<h1>Mis juegos favoritos: </h1>" . "<br>";
    #echo $arrayJuegos["s"] . "<br>";
    # echo $arrayJuegos["snes"][1] . "<br>";

    #echo $arrayJuegos["z"] . "<br>";
    #echo $arrayJuegos["e"] . "<br>";

    // Use of foreach in order to go through the array

    // There are two ways to transverse an array, the first one
    // is: foreach($my_array as $valueOfArray), thus the foreach go through the whole array
    // the second one: foreach($my_array as $clave-key => $valueOfArray(one-element))

    foreach($arrayJuegos as $c => &$v) {
        echo "Valor actual de ArrayJuegos con clave: ".$c.", ".$v."<br>";

        # echo $arrayJuegos["$c"] . "<br>";
        # echo $v;
    }

?>