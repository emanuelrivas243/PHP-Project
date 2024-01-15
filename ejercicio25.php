<?php

    /**
     * Use of Herency 
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
    }

    /**
     * Herencia: Hereda de Persona
     * Va a tener un arreglo que será alusivo a las asignaturas del estudiante
     */
    class Estudiante extends Persona {
        //Atributes from Estudiante
        public $asignaturas;

        // Constructor
        public function __construct($nombre, $edad, $genero, array $asignaturas){
            // Llamada al constructor de Persona, la clase de la que estamos heredando
            parent::__construct($nombre, $edad, $genero);
            $this->asignaturas = $asignaturas;
        }

        // Update asignatures passed into the parameter
        public function actualizar_asignaturas($asignatura) {
            # Toma el array existente asignaturas, y le añade al final las asignaturas a través del 
            # array_push los que se le pasen por el parametro a actualizar_asignaturas
            array_push($this->asignaturas, ...$asignatura);
        }

        // Say Hello and present theirself with their whole data
        public function saludar_estudiante() {
            parent::saludar();
            echo "Y mis asignaturas de este semestre son: <br>";
            
            for($i=0; $i < count($this->asignaturas); $i++) {
                echo $this->asignaturas[$i] . "<br>";
            }
            
        }

    }

    $Emanuel = new Estudiante("Emanuel", 20, "Masculino", ["Inteligencia Artificial", "Electiva Piano", "FLP", "PHP"]);
    #$Emanuel->saludar_estudiante();
    $Emanuel->actualizar_asignaturas(["Proyecto Integrador", "Simulación y Computación Numerica"]);
    #$Emanuel->saludar();
    $Emanuel->saludar_estudiante();
    

?>
