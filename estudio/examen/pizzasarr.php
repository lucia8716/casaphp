<?php

$ar = fopen("pizzas.txt", "a") or die("Problemas en la creacion");
fwrite($ar, $_REQUEST['nombre']);
fwrite($ar, "|");
fwrite($ar, $_REQUEST['telefono']);
fwrite($ar, "|");

for ($i = 0; $i < 3; $i++) {

    if (isset($_POST['pizzas'][$i])) {

        fwrite($ar, $_POST['pizzas'][$i]);
        fwrite($ar, ",");
        fwrite($ar, $_POST['cantidad'][$i]);
        fwrite($ar, "|");
    }
}
fwrite($ar, PHP_EOL);

fclose($ar);
