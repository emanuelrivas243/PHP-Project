


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
<?php
    $x = 5;
    var_dump($x);

    $nombre = "Emanuel";
    var_dump($nombre);
    
    $misGatos = array("Gordito", "Manchis", "Negris", "Gordis");

    //echo $misGatos[0];

for($i=0; $i < count($misGatos); $i++) {
	echo $misGatos[$i];
}



?>
</body>
</html>