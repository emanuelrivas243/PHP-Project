<?php 

    if($_POST) {
        $a = $_POST['a'];
        $b = $_POST['b'];

        $suma = ($a + $b);
        $resta = $a - $b;
        $mult = $a * $b;
        $division = $a / $b;
        $modulo = $a % $b;

        echo "La suma de $a y $b es: " . $suma . "<br>";
        echo "La resta de $a y $b es: " . $resta . "<br>";
        echo "La multiplicacion de $a y $b es: " . $mult . "<br>";
        echo "La division de $a y $b es: " . $division . "<br>";
        echo "El modulo de $a y $b es: " . $modulo . "<br>";
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Aritmeticas</title>
</head>
<body>
    <form action="ejercicio8.php" method="post">
        <!-- Primer Input o Numero -->
        <label for="primero">Ingresa el primer numero: </label>
        <input type="text" name="a" id="primero"><br>
        <label for="segundo">Ingresa el segundo numero: </label>
        <input type="text" name="b" id="segundo"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>