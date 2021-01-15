<?php
// funciones de volcado de variables 

$ar = array(
    'España' => 'Madrid',
    'Francia' => 'París',
    'Reino Unido' => 'Londres'
);

print "<BR><BR><B>Matriz vista por print_r </B><BR>";
print_r($ar);

print "<BR><BR><B>Matriz vista por var_dump() </B><BR>";
var_dump($ar);


print "<BR><BR><B>Matriz vista por print_r y la etiqueta pre</B><BR>";
echo "<PRE>";
print_r($ar);
echo "</PRE>";



foreach ($ar as $key => $value) {
    echo $key;
    echo '---';
    echo $value;
    echo '<br>';
}

function depurar_array($miarray, $die = 0)
{
    // Muestro el esquema del array
    echo "<pre> ";
    print_r($miarray);
    echo "</pre> ";
    // Detengo la ejecución
    if ($die) die();
}
