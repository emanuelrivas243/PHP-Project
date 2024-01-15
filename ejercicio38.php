<?php

/**
 * Leer documento/archivos desde PHP 
 */

// 1ra forma: readfile('documento.txt');

// Segunda forma

/** fopen
 * Establece el flujo de datos
 * entre este script y el archivo
 * Solo abre el archivo, nada más
 */

$archivo = "documento.txt";
$archivoAbierto = fopen($archivo, 'r');

// print_r($archivoAbierto);

$datos = fread($archivoAbierto, filesize($archivo));

echo $datos;

// Cerrar el stream/flujo, para liberar los recursos empleados
fclose($archivoAbierto);




?>