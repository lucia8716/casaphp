<?php

header('Content-Type: text/html; charset=UTF-8');
$fp = fopen('fichero2.txt', 'r') or die('ERROR: No ha sido posible abrir el archivo. Revisa su nombre y sus permisos.');

$line = fgets($fp);

while (!feof($fp)) { // loop hasta que se llegue al final del archivo

    $field[] = explode(';', $line);
    $line = fgets($fp); //leemos del registro segundo al último.

}
fclose($fp);

$diesel = 0;
$gasolina = 0;
$Alfa = 0;

foreach ($field as $infor) { //$field es un array bidimensional

    if ($infor[1] == 'Diesel') {
        $diesel++;

        echo ' 

    
        <div>Diesel: ' . $infor[1] . '</div>';
    } else {

        $gasolina++;
        echo ' 
    
        <div>Gasolina: ' . $infor[1] . '</div>';
    }
    echo ' 
         
      <div>En: ' . $infor[2] . ' comunidades autonomas apare la marca:' . $infor[0] . ' </div> 
      <div>**************************************</div>';
}


foreach ($field as $infor) { //$field es un array bidimensional

    if ($infor[0] == 'ALFAROMEO') {
        $Alfa++;
    }
}

echo '<div>Diesel: ' . $diesel . ' el resultado de sumar la columna de carburante</div>';
echo '<div>Gasolina: ' . $gasolina . ' el resultado de sumar la columna de carburante</div>';
echo '<div>En' . $gasolina . 'las comunidades que aparece la marca alfaromeo: </div>';
