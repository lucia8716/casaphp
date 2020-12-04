<?php
header('Content-Type: text/html; charset=UTF-8');
$fp = fopen('datos.txt', 'r') or die('ERROR: No ha sido posible abrir el archivo. Revisa su nombre y sus permisos.');


$line = fgets($fp); // guardamos toda la línea en $line como un string. Leemos el primer registro del fichero
while (!feof($fp)) { // loop hasta que se llegue al final del archivo

    // echo $line;
    //echo "</br>";

    echo nl2br($line); //igual que "</br>";
    $line = fgets($fp); //leemos del registro segundo al último.


}
fclose($fp);






// generamos la salida HTML 
