<?php
header('Content-Type: text/html; charset=UTF-8');
$fp = fopen('pizzas.txt', 'r') or die('ERROR: No ha sido posible abrir el archivo. Revisa su nombre y sus permisos.');
$line = fgets($fp);

while (!feof($fp)) {

    echo nl2br($line);
    $line = fgets($fp);
    echo '<div>**************************************</div>';
}

fclose($fp);
