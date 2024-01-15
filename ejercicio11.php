<?php

    if($_POST) {
        $a = $_POST['a'];
        $b = $_POST['b'];

        // Decir si es numero positivo o negativo, y dentro si es par o impar
        if ($a > 0) {
            if($a % 2 == 0) {
                echo "El numero es positivo, y es par";
            } else {
                echo "El numero es positivo, pero no par";
            }
        }

        elseif($a < 0) {
            if($a % 2 == 0) {
                echo "El numero es negativo y es par";
            } else {
                echo "El numero es es negativo e impar";
            }
        }

        else {
            echo "Es 0, o el numero que introduciste no es correcto";
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If anidado</title>
</head>
<body>
    <form action="ejercicio11.php" method="post">
        Primer numero:
        <input type="text" name="a">
        <br>
        Segundo numero:
        <input type="text" name="b">
        <br>
        <input type="submit" value="Enviar">
    </form>    
</body>
</html>