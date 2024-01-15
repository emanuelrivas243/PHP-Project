<?php

if($_POST) {
    $txtArea = $_POST['txtArea'];
    $contador = str_word_count($txtArea);

    // Contar las palabras, esta es otra version usando la función integrada en PHP
    

    echo "La oración " . $txtArea . ", tiene la cantidad de palabras: " . $contador;

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de palabras</title>
</head>
<body>
    <form action="ejercicioContador.php" method="post">
        <h1>Bienvenido!</h1>
        <label for="txtArea">Ingresa las palabras que gustes: </label>
        <textarea name="txtArea" id="txtArea" cols="30" rows="2"></textarea>
        <br>
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>