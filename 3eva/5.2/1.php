<?php
// funciones de volcado de variables 

$ar = array(
    'Madrid',
    'París',
    'Londres'
);

$cont = 0;
print "<BR><BR><B>Matriz vista por print_r </B><BR>";
print_r($ar);

print "<BR><BR><B>Matriz vista por var_dump() </B><BR>";
var_dump($ar);


foreach ($ar as $key => $value) {
    echo $key . '---->' . $value;
    echo '<br>';
}


print "<BR><BR><B>Matriz vista por print_r y la etiqueta pre</B><BR>";
echo "<PRE>";
print_r($ar);
echo "</PRE>";




depurar_array($ar, $die = 0);

function depurar_array($ar, $die = 0)
{
    // Muestro el esquema del array
    echo "<pre> ";
    echo "cerebro de mono ";
    print_r($ar);
    echo "</pre> ";
    // Detengo la ejecución
    if ($die) die();
}
