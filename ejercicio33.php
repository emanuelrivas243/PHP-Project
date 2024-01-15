<?php

/**
 * Función para decodificar JSON's
 * Es información que viene de API's
 */

$jsonDatos = '[
    {"juego": "Silent Hill 2", "empresa": "Konami"},
    {"juego": "Zelda Twilight Princess", "empresa": "Nintendo"},
    {"juego": "Silent Hill 3", "empresa": "Konami"}
]';

// Convierte el JSON a un array de objetos
$resultado = json_decode($jsonDatos);

// foreach ($resultado as $juego) {
//     print_r ($juego);
// }

// print_r($resultado[0]->juego);

foreach ($resultado as $juego) {
    echo $juego->juego . ", " . $juego->empresa . "<br>";
}




?>