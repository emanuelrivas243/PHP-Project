<?php

    /**
     * Static Methods
     */
/*
    class Cat {
        public static $edad = 10;

        // Metodo no estatico
        public function decir_edad() {
            echo "La edad del gato es: " . self::$edad . "<br>";
        }

        // Metodo estatico
        public static function retornar_edad() {
            return self::$edad;
        }
    }

    // Así, $gordis->$edad da error, ya que el objeto al instanciarse
    // no tiene la propiedad de $edad, esa propiedad es exclusiva y propia de la clase
    // aunque puedo acceder a esa propiedad si lo hago desde un metodo
    // pero nunca directamente acceder a la propiedad
    $gordis = new Cat();
    #$gordis->$edad;

    echo "La edad de Gordis es: " . $gordis->retornar_edad() . "<br>";

    // Guardando el resultado de un metodo estatico, para reutilizarlo cuando queramos
    // o en cualquier lado

    $edadGordis = Cat::retornar_edad();
    echo "Usando metodo estatico: " . $edadGordis;

*/


    /**
     * Ejercicios
     */

    // Ejercicio 1

    class Contador {
        static $instancias = 0;

        public function __construct() {
            //self::$instancias = self::$instancias + 1;
            self::$instancias++;
        }
    }

    $cont1 = new Contador();
    $cont2 = new Contador();

    $resultado = Contador::$instancias;

    #echo $resultado . "<br>";

    #echo $resultado . " XDDD";


    class Calculadora {
        // Metodos estaticos para la calculadora

        public static function suma($a, $b) {
            return $a + $b;
        }

        public static function resta($a, $b) {
            return $a - $b;
        }

        public static function mult($a, $b) {
            return $a * $b;
        }

        public static function division($a, $b) {
            if ($b != 0) {
                return $a / $b;
            } else {
                return "No es posible dividir entre cero.";
            }
        }
    }

    $miNumero = Calculadora::suma(240, 3);
    echo $miNumero . "<br>";
    
    echo "Mi numero favorito (pa ver la reutilizacion de metodos estaticos XDDD) es: $miNumero <br>";

    $resta = Calculadora::resta(3, 4);
    echo $resta . "<br>";

    $mult = Calculadora::mult(24, 10) + Calculadora::suma(1, 2);
    echo "Multiplicacion de 24*10 + (1+2): " . $mult . "<br>";

    $division = Calculadora::division(12, 6) . "<br>";
    echo $division;