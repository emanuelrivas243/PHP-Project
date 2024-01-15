<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Fantasy X Analysis</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <!-- Contenido especifico de index.php -->
    <form action="index.php" method="get">
        <label for="juego">Dinos tu juego favorito de Final Fantasy, además del X: </label>
        <input type="text" name="txtJuego" id="juego">

        <input type="submit" value="Enviar">
    </form>

    <?php
        include 'footer.php';
    ?>
</body>
</html>