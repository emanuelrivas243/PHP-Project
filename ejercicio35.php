<?php

/**
 * Consumir una API desde PHP
 */

$url = "https://pokeapi.co/api/v2/pokemon?limit=100&offset=0";

$opciones = array(
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false
    )
);

$respuesta = file_get_contents($url, false, stream_context_create($opciones));

$objRespuesta = json_decode($respuesta);

// print_r($objRespuesta->results);

echo "<strong>Nombre de los pokemon de la 1ra generación:</strong> <br/>";

// foreach ($objRespuesta->results as $pokemon) {
//     // echo $pokemon->name . "<br/>";
//     // print_r($pokemon->name . " " . $pokemon->url . "<br/>" );
// }

?>

<ul>
    <?php foreach($objRespuesta->results as $pokemon) { 
        print_r("<li> $pokemon->name </li>");
    }
    ?>
</ul>