<?php

    /*
        Ejercicio #2: Validación 
        de contraseña 
    */

    function validar_contraseña($contrasena) {
        $calcularTamanio = strlen($contrasena);
        $mayuscula = 0;
        $minuscula = 0;
        $numero = 0;
        
        // Valida si el caracter es mayusculo
        for($i=0; $i < $calcularTamanio; $i++) {
            if($contrasena[$i] == strtoupper($contrasena[$i])) {
                $mayuscula += 1;
            }
        }

        for($i = 0; $i < $calcularTamanio; $i++) {
            if($contrasena[$i] == strtolower($contrasena[$i])) {
                $minuscula += 1;
            }
        }

        for($i = 0; $i < $calcularTamanio; $i++) {
            if($contrasena[$i] == is_numeric($contrasena[$i])) {
                $numero += 1;
            }
        }

        if ($calcularTamanio >= 8 && $mayuscula >= 1 && $minuscula >= 1 && $numero >= 1) {
            echo "Calculando para contraseña: " . $contrasena . "<br>";
            echo "La contraseña es correcta :)" . "<br>" ;
        }
    }


    validar_contraseña("Emanuel2431");
    validar_contraseña("emanuelArturo2");
    validar_contraseña("daslñdfksañlfqñlvesñljvlsdjvsdlkvjdslkvjdskfjslñkvjsdkljvksdljvkdsljvkldsjvklsdnvklsdnvksdlnvklsdnvkdslnfjeiofjewiofnwñovncovndsonvdsonvsnv sonv dsn vdsnv243DASJDALSmklmaslka")
?>