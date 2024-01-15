<?php

if($_POST) {
    $txtArea = $_POST['txtArea'];
    $contador = 1;

    // Contar los espacios en blanco
    for ($i=0; $i < strlen($txtArea); $i++) { 
        if($txtArea[$i] == ' ') {
            $contador+=1;
        }
    }

    echo "La palabra " . $txtArea . ", contó cuantas palabras: " . $contador;

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