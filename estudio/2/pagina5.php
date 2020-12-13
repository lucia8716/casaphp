<?php
$ar = fopen("datos2.txt", "a") or die("Problemas en la creacion");
fwrite($ar, $_REQUEST['nombre']);
fwrite($ar, "|"); //separación entre nombre y teléfono
fwrite($ar, $_REQUEST['direccion']);

for ($i = 0; $i < 3; $i++) {
    if (isset($_REQUEST['pizzas'][$i])) {
        fwrite($ar, $_REQUEST['pizzas'][$i]);
        fwrite($ar, $_REQUEST['cantidad'][$i]);
        fwrite($ar, "|");
    }
}

fwrite($ar, PHP_EOL);




fclose($ar);
echo "Los datos se guardaron correctamente.";
