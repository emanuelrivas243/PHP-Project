<?php

/**
 * Galería de imagenes
 */

$ffx = "./76-768324_final-fantasy-x-logo-png-final-fantasy-x.png";
$ffix = "./logo_ff9_en-5ee9d35596777caa408169470637e6f622f703329d95a194f6f548c0d704e2cd.png";
$ffvi = "./476-4769795_ff6-logo-final-fantasy-vi-logo-png-transparent.png";

$arrayJuegos = [$ffx, $ffix, $ffvi];

foreach ($arrayJuegos as $ff) {
    echo '<img src="' . $ff . '" alt="ff game" width="450" height="250">';
}

?>

