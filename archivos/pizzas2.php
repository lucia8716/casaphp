<?php
$ar = fopen("pizzas.txt", "a") or die("Problemas en la creacion");
fwrite($ar, $_POST['nombre']);
fwrite($ar, "|"); //separación entre nombre y teléfono
fwrite($ar, $_POST['telefono']);
fwrite($ar, "|");

if (isset($_POST['pi1'])) {
    fwrite($ar, $_POST['pi1']);
    fwrite($ar, " cantidad=");
    fwrite($ar, $_POST['v1']);
}

if (isset($_POST['pi2'])) {
    fwrite($ar, $_POST['pi2']);
    fwrite($ar, " cantidad=");
    fwrite($ar, $_POST['v2']);
}

if (isset($_POST['pi3'])) {
    fwrite($ar, $_POST['pi3']);
    fwrite($ar, " cantidad=");
    fwrite($ar, $_POST['v3']);
}

fwrite($ar, PHP_EOL);



//PHP_EOL (End Of Line. Introduce un salto de línea)
fclose($ar);
echo "Los datos se guardaron correctamente.";
