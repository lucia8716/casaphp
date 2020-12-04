<?php
$mis_fotos = "misfotos";

foreach (glob($mis_fotos . "/*.*") as $archivos_carpeta) {
    unlink($archivos_carpeta);
    // Eliminamos todos los archivos de la carpeta hasta dejarla vacia  
}
rmdir($mis_fotos);         // Eliminamos la carpeta vacia  
