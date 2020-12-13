<?php
header('Content-Type: text/html; charset=UTF-8');
$fp = fopen('datos2.txt', 'r') or die('ERROR: No ha sido posible abrir el archivo. Revisa su nombre y sus permisos.');

$line = fgets($fp);

while (!feof($fp)) { // loop hasta que se llegue al final del archivo

    echo nl2br($line); //igual que "</br>";
    $line = fgets($fp); //leemos del registro segundo al último.
    echo '<div>**************************************</div>';
}
fclose($fp);
