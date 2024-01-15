<?php

    $name = strtoupper("emanuel");
    $lastname = strtolower("RIVAS");


    function your_name($name, $lastname) {
        echo "Hi, your name: " . strtoupper($name) . " " . strtolower($lastname) . "<br>";
    }


    your_name("emanuel", "rIVas");
    your_name("sARAmely", "rivas");
    your_name("uioliam", "solarte");
?>