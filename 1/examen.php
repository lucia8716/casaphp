<?php

$var = array(3, 2, 5, 8, array(1, 3, array(8, 5)));
function recorrido($arg)
{
    $resultado = 0;
    foreach ($arg as $key => $value) {


        if (is_array($value)) {
            $array2 = $arg[$key];
            echo $resultado . '<br>';
            $resultado = $resultado + recorrido($array2);
        } else {
            $resultado = $resultado + $value;
        }
    }

    $resultado = $resultado - $arg[0];
    return $resultado;
}

$total = recorrido($var);
echo $total . '</br>';
