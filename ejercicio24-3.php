<?php

    /**
     * Creando calculadora basica con clases
     */

    class Calculator {
        // Attributes
        public $a;
        public $b;

        // Constructor
        public function __construct($a, $b){
            // Initial state
            $this->a = $a;
            $this->b = $b;
        }

        public function suma(){
            return $this->a + $this->b;
        }

        public function resta(){
            return $this->a - $this->b;
        }

        public function mult(){
            return $this->a * $this->b;
        }

        public function division(){
            if ($this->b != 0) {
                return $this->a / $this->b;
            } else {
                echo "No se puede dividir entre 0";
            }
        }
    }


    $calcular = new Calculator(4,5);
    echo $calcular->suma() . "<br>";
    echo $calcular->resta() . "<br>";
    echo $calcular->mult() . "<br>";
    echo $calcular->division() . "<br>";

?>