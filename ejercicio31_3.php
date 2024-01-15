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
$txtPreferencias = "";
$txtGenero = "";
$txtRazonJuego = "";

if($_POST) {

    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
    $txtApellido = (isset($_POST['txtApellido'])) ? $_POST['txtApellido'] : "";
    $txtUsuario = (isset($_POST['txtUsuario'])) ? $_POST['txtUsuario'] : "";
    $txtJuego = (isset($_POST['txtJuego'])) ? $_POST['txtJuego'] : "";
    //$txtPreferencia1 = (isset($_POST['txtPreferencia1'])) ? $_POST['txtPreferencia1'] : "";
    //$txtPreferencia2 = (isset($_POST['txtPreferencia2'])) ? $_POST['txtPreferencia2'] : "";
    //$txtPreferencia3 = (isset($_POST['txtPreferencia3'])) ? $_POST['txtPreferencia3'] : "";
    $txtGenero = (isset($_POST['txtGenero'])) ? $_POST['txtGenero'] : "";
    $txtPreferencias = $_POST['txtPreferencia'];
    $arrayPref = implode(", ", $txtPreferencias);
    //$txtRazonJuego = (isset($_POST['txtArea']))
    $txtRazonJuego = (isset($_POST['txtArea'])) ? $_POST['txtArea'] : "";
    
    // SQL
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";

    
    try {
        $conexion = new PDO("mysql:host=$servidor; dbname=usuario", $usuario, $contrasena);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "INSERT INTO `user_data`(`name`, `lastname`, `username`, `shfavorite`, `modefav`, `genrefav`, `reason_user`) VALUES ('$txtNombre', '$txtApellido', '$txtUsuario', '$txtJuego', '$arrayPref', '$txtGenero', '$txtRazonJuego');";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll();

    } catch(PDOException $e) {
        echo "Sucedio un error en la conexion " . $e->getMessage();
    }
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
    <?php if($_POST) { echo "<strong>Hola, </strong>" . $txtNombre . "<br> Tu videojuego de Silent Hill favorito es: " . $txtJuego . "<br> Tu genero favorito es: " . $txtGenero . "<br> <strong>Tus plataformas favoritas para jugar son: </strong> <br/> " . implode('<br>', $txtPreferencias); }?>

    <form action="ejercicio31_3.php" method="post">
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
        <label for="sh3">Silent Hill 3</label>

        <input type="radio" name="txtJuego" <?php echo ($txtJuego == "Ninguno") ? "checked" : ""; ?> id="ninguno" value="Ninguno">
        <label for="ninguno">Ninguno</label>
        <br/>

        <!-- Uso de Checkboxes - Variable preferencia -->
        <legend>Selecciona tu modo de preferencia al jugar:</legend>
        <input type="checkbox" <?php if($_POST) { echo (in_array("Movil", $txtPreferencias)) ? "checked" : "";}?> name="txtPreferencia[]" id="movil" value="Movil">
        <label for="movil">Movil</label>
        
        <input type="checkbox" <?php if($_POST) { echo (in_array("PC", $txtPreferencias)) ? "checked" : "";}?> name="txtPreferencia[]" id="pc" value="PC">
        <label for="pc">PC</label>

        <input type="checkbox" <?php if($_POST) { echo (in_array("Consola", $txtPreferencias)) ? "checked" : "";}?> name="txtPreferencia[]" id="consola" value="Consola">
        <label for="consola">Consola</label><br/>
        

        <!-- Uso de select-option  -->
        <label for="genero">Selecciona tu genero favorito:</label>
        <select name="txtGenero" id="genero">
            <option value="RPG">RPG</option>
            <option value="Accion-Aventura" <?php echo ($txtGenero == "Accion-Aventura") ? "selected" : ""; ?>>Accion-Aventura</option>
            <option value="Terror Psicologico" <?php echo ($txtGenero == "Terror Psicologico") ? "selected" : ""; ?> >Terror Psicologico</option>
            <option value="Hack and Slash" <?php echo ($txtGenero == "Hack and Slash") ? "selected" : ""; ?>>Hack and Slash</option>
            <option value="Souls Like" <?php echo ($txtGenero == "Souls Like") ? "selected" : ""; ?> >Souls Like</option>
            <option value="Ninguno" <?php echo ($txtGenero == "Ninguno") ? "selected" : ""; ?> >Ninguno</option>
        </select>
        <br/>
        <label for="txtarea">Dinos qué es lo que más te gusta de jugar y/o Silent Hill:</label>
        <textarea id="txtarea" name="txtArea" <?php echo $txtRazonJuego;?> rows="1" cols="50" placeholder="Dinos tu opinión..." required></textarea>

        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>