<?php

$ar = array(
    'Madrid',
    'París',
    'Londres'
);


var_dump($ar);
print_r($ar);

function depurar_array($ar, $die = 0)
{
    // Muestro el esquema del array
    echo "<pre> ";
    print_r($ar);
    echo "</pre> ";
    // Detengo la ejecución
    if ($die) die();
}



foreach ($ar as $key => $value) {
    echo $key . '----->' . $value;
}


depurar_array($ar, $die = 0);
