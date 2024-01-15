<?php

/** 
 * Escritura de archivos en PHP
 */

 $nombreArchivo = "macmiller.txt";

 // Abrir el archivo en modo escritura (w)
 $archivoAbierto = fopen($nombreArchivo, 'w');
 
 if ($archivoAbierto) {
     // Realizar operaciones de escritura
     fwrite($archivoAbierto, "Hola, mi álbum favorito es 'Swimming' de Mac Miller \n");
     fwrite($archivoAbierto, "Mi álbum favorito de Kanye es 'The Life of Pablo'.");
 
     // Cerrar el archivo en modo escritura
     fclose($archivoAbierto);
 
     // Abrir el archivo en modo append (a)
     $archivoAppend = fopen($nombreArchivo, 'a');
 
     if ($archivoAppend) {
         // Realizar operaciones de escritura adicionales en modo append
         fwrite($archivoAppend, "\nA continuación, mi álbum favorito de Frank Ocean es 'Blonde'.");
         
         // Cerrar el archivo en modo append
         fclose($archivoAppend);
     }
 }
?>