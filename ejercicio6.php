

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

/* Data Types in PHP */
// Yeah of course I'm gonna write everything I can in English xDDD

// Mi familia
$yo = "Emanuel";
$yoEdad = 20;
$mama = "Johanna";
$papa = "Arturo";
$hermana = "Saramely";

// PHP in order to index their arrays, starts from zero to array.length
$misGatos = array("Gordito", "Manchis", "Negris", "Gordis");

echo "soy " . $yo . " tengo " . $yoEdad . " y mi mamá se llama $mama, mi papá se llama $papa, y mi hermana $hermana";
echo "Mis gatos se llaman: ";

for($i=0; $i < count($misGatos); $i++) {
    echo "$misGatos[$i]\n";
}


?>
</body>
</html>