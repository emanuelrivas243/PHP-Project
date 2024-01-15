<?php

/**
 * Manejo de checkboxes
 * Ejercicio de ejemplo
 */

# Initialize variables
$txtNombre = "";
$txtApellido = "";
$txtUsuario = "";
$txtJuego = "";
$txtPreferencia1 = "";
$txtPreferencia2 = "";
$txtPreferencia3 = "";

if($_POST) {

    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
    $txtApellido = (isset($_POST['txtApellido'])) ? $_POST['txtApellido'] : "";
    $txtUsuario = (isset($_POST['txtUsuario'])) ? $_POST['txtUsuario'] : "";
    $txtJuego = (isset($_POST['txtJuego'])) ? $_POST['txtJuego'] : "";
    $txtPreferencia1 = (isset($_POST['txtPreferencia1']) && $_POST['txtPreferencia1'] == "Movil") ? "checked" : "";
    $txtPreferencia2 = (isset($_POST['txtPreferencia2']) && $_POST['txtPreferencia2'] == "PC") ? "checked" : "";
    $txtPreferencia3 = (isset($_POST['txtPreferencia3']) && $_POST['txtPreferencia3'] == "Consola") ? "checked" : "";

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Preferences</title>
</head>
<body>
    <?php if($_POST) { echo "<strong>Hola, </strong>" . $txtNombre . "<br> Tu videojuego de Silent Hill favorito es: " . $txtJuego ; }?>

    <form action="ejercicio32.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" value="<?php echo $txtNombre; ?> "><br/>
        Apellido:
        <input type="text" name="txtApellido" value="<?php echo $txtApellido; ?> "><br/>
        Username:
        <input type="text" name="txtUsuario" value="<?php echo $txtUsuario; ?> "><br/>

        <legend><strong>Selecciona</strong> tu Silent Hill favorito:</legend>
        <input type="radio" name="txtJuego" <?php echo ($txtJuego == "Silent Hill") ? "checked" : ""; ?> id="sh" value="Silent Hill">
        <label for="sh">Silent Hill</label>

        <input type="radio" name="txtJuego" <?php echo ($txtJuego == "Silent Hill 2") ? "checked" : ""; ?> id="sh2" value="Silent Hill 2">
        <label for="sh2">Silent Hill 2</label>
        
        <input type="radio" name="txtJuego" <?php echo ($txtJuego == "Silent Hill 3") ? "checked" : ""; ?> id="sh3" value="Silent Hill 3">
        <label for="sh3">Silent Hill 3</label><br/>
        <br/>

        <!-- Uso de Checkboxes - Variable preferencia -->
        <legend>Selecciona tu modo de preferencia al jugar:</legend>
        <input type="checkbox" <?php echo $txtPreferencia1;?> name="txtPreferencia1" id="movil" value="Movil">
        <label for="movil">Movil</label>
        
        <input type="checkbox" <?php echo $txtPreferencia2;?> name="txtPreferencia2" id="pc" value="PC">
        <label for="pc">PC</label>

        <input type="checkbox" <?php echo $txtPreferencia3;?> name="txtPreferencia3" id="consola" value="Consola">
        <label for="consola">Consola</label><br/>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>