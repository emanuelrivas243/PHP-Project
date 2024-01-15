<?php

    /**
     * Exercise 24
     * Use of classes and OOP Concepts
     */

    class Cat {

        # Atributtes
        public $nombre;
        public $edad;

        # Methods
        public function asignar_nombre($nuevoNombre) {
            $this->nombre = $nuevoNombre;
        }

        public function presentarse() {
            echo "Hola, mi nombre es: " . $this->nombre . ", y tengo " . $this->edad  . " años <br>";
        }

        public function actualizar_edad($edadAct) {
            $this->edad = $edadAct;
        }
    }

    $objGordito = new Cat();
    $objGordis = new Cat();
    $objManchis = new Cat();
    $objNegris = new Cat();

    $objGordito->asignar_nombre("Gordito");
    $objGordito->presentarse();

    $objGordis->asignar_nombre("Gordis");
    $objGordis->presentarse();

    $objManchis->asignar_nombre("Manchis");
    $objManchis->presentarse();

    $objNegris->asignar_nombre("Negris");
    $objNegris->presentarse();

    $objGordis->actualizar_edad(10);
    echo $objGordis->edad . "<br>";
    # $objGordis->actualizar_edad(11);
    $objGordis->presentarse();




?>