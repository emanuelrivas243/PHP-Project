<?php

    /**
     * Practice using Classes from PHP
     */

    class Persona {
        // Atributtes
        public $nombre;
        public $edad;
        public $genero;

        //Constructor
        public function __construct($nombre, $edad, $genero) {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->genero = $genero;
        }

        // Methods
        public function saludar() {
            // Esta es mi forma, la de abajo documentada
            //echo "Hola, soy " . $this->nombre . ", mi edad es " . $this->edad . " y mi genero es " . $this->genero . "<br>";
            echo "Hola, soy {$this->nombre}, mi edad es {$this->edad} y mi genero es {$this->genero} <br>";
        }

        public function carrera($career) {
            echo "Yo " . $this->nombre . ", soy estudiante de " . $career . "<br>";
        }
    }

    $objYo = new Persona("Emanuel", 20, "Masculino. 8)");
    $objYo->carrera("Ingeniería de Sistemas");

    $objPablo = new Persona("Pablo", 21, "Masculino");
    $objPablo->carrera("Economía");

    $objWilliam = new Persona("William", 21, "Masculino");
    $objWilliam->carrera("Estadistica");
    echo "<br>";
    echo "<br>";

    $objYo->saludar();  
    $objPablo->saludar();
    $objWilliam->saludar();

?>