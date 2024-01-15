<?php

    if($_POST) {
        $nombre = $_POST['txtNombre'];
        echo $nombre;
        $apellido = $_POST['txtApellido'];
        echo $apellido;
        $edad = $_POST['txtEdad'];
        echo $edad;
        $genero = $_POST['txtGenero'];
        echo $genero;
        $area = $_POST['txtArea'];
        echo $area;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Musica</title>
</head>
<body>
    <h1>Bienvenido! Llena el siguiente formulario</h1>
    <form action="formMusica.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="txtNombre" id="nombre">
        <br/>
        <br/>
        <label for="apellido">Apellido:</label>
        <input type="text" name="txtApellido" id="apellido">
        <br/>
        <br/>
        <label for="edad">Edad:</label>
        <input type="number" name="txtEdad" id="edad">
        <br/>
        <br/>
        <label for="genero">Genero Musical Favorito: </label>
        <select name="txtGenero" id="genero">
            <option value="rnb">RnB</option>
            <option value="rock">Rock</option>
            <option value="rap">Rap</option>
            <option value="sinfonica" selected>Sinfonica</option>
            <option value="phonk">phonk</option>
        </select>
        <br/>
        <br/>
        <label for="area">Ingresa tu album favorito:</label>
        <textarea name="txtArea" id="area" cols="35" rows="3"></textarea>
        <br/>
        <br/>
        <!--<input type="submit" value="Enviar">--> 
        <button type="submit">Enviar</button>
    </form>
</body>
</html>