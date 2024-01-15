<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
/**
    * Como se está accediendo a la key del arreglo $_FILES['archivo']['name'], así
    * obtenemos el valor de dicha key, que es el archivo original kmiadoez7a4b1.jpg, por eso 
    * podemos copiar el archivo original en este directorio, ya que estamos accediendo al valor
    * de la key ['archivo']['name'] del arreglo, qué interesante eso 8)
    * poder guardar imagenes en arreglos, y acceder a ellas a través de la clave/key
    * key:value --> $_FILES['archivo']['name'] => kmiadoez7a4b1.jpg
    * así, estamos accediendo al kmiadoez7a4b1.jpg a través de ['archivo']['name'] :D
    */
    $archivo_nombre = $_FILES['archivo']['name'];
    $destino = __DIR__ . "/" . $archivo_nombre;
    print_r($destino);
    move_uploaded_file($_FILES['archivo']['tmp_name'], $destino);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos</title>
</head>
<body>
    <form action="ejercicio32.php" enctype="multipart/form-data" method="post">

        Selecciona un archivo o imagen:
        <input type="file" name="archivo" id="">
        <br/> 
        <input type="submit" value="Enviar">
    </form>
</body>
</html>