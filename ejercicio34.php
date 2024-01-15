<?php

/**
 * Pasar de array a JSON
 * encode -> codificar json
 */

$amigos = array(
    "William" => 21,
    "Pablo" => 21,
    "Arlex" => 19,
    "Estor" => 19,
);

// codificar json a partir de array

// foreach ($amigos as $c => $a) {
//     echo "$c: $a" . "<br>";
// }

$json = json_encode($amigos);
print_r($json);

?>