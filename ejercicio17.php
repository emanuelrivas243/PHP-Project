<?php

    /*
        Funciones en PHP
    */

    // Primer ejercicio: Calculadora basica

    function suma($a, $b) {

        if (is_int($a) && is_int($b)) {
            return $a + $b;
        } else {
            echo "Error, debes introducir enteros";
        }
    }

    function resta($a, $b) {

        if (is_int($a) && is_int($b)) {
            return $a - $b;
        } else {
            echo "Error, debes introducir enteros";
        }
    }

    function mult($a, $b) {
        if (is_int($a) && is_int($b)) {
            return $a * $b;
        } else {
            echo "Error, debes introducir enteros";
        }
    }
    
    function division($a, $b) {
        if (is_int($a) && is_int($b) && ($b != 0)) {
            return $a / $b;
        } else {
            echo "Error, debes introducir enteros";
        }
    }

    echo "Suma: " . suma(4, "hola") . "<br>";
    echo "Resta: " . resta(mult(4,3), 3) . "<br>";
    echo "Resta: " . resta(2, -8) . "<br>";
    echo "Division: " . suma(mult(5, 2), 8) . "<br>";
    

?>