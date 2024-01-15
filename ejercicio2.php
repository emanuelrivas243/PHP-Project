<?php
    /*
        Codigo PHP
        Uso de método POST
        Recibe información del formulario HTML (Metodo Post)
    */

    if ($_POST){

        $nombre = $_POST['txtNombre'];
        echo 'Hola '.$nombre;

        $edad = $_POST['txtEdad'];
        echo $edad;
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer PHP</title>
</head>
<body>
    <h1>Hola Mundo :D</h1>
    <h2>Usando h2 para texto</h2>
    hola mundo
    <h3>Usando h3 XDDD</h3>
    
    <form action="ejercicio2.php" method="post">
        <label>Nombre:</label>
        <input type="text" name="txtNombre" id="fNombre">
        <input type="submit" value="Enviar">
        <br/>
        <label>Edad:</label>
        <input type="number" name="txtEdad" id="fEdad">
        <input type="submit" value="Enviar">
        <br/>

    </form>
</body>
</html>