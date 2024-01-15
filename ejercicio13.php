<?php

    // Uso de switch
    if($_POST) {
        $boton = $_POST['btnValor'];

        switch($boton) {
            case 1: 
                echo "Oprimiste el boton 1";
                break;
            case 2:
                echo "Oprimiste el boton 2";
                break;
            case 3:
                echo "Oprimiste el boton 3";
                break;
            default:
                echo "Hubo un error";
                break;       
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso del Switch</title>
</head>
<body>
    <form action="ejercicio13.php" method="post">
        <input type="submit" value="1" name="btnValor">
        <br>
        <input type="submit" value="2" name="btnValor">
        <br>
        <input type="submit" value="3" name="btnValor">
    </form>
</body>
</html>