<?php
$ar = fopen("datos2.txt", "a") or die("Problemas en la creacion pizzas");
fwrite($ar, $_POST['nombre']);
fwrite($ar, "|"); //separación entre nombre y teléfono
fwrite($ar, $_POST['direccion']);

$numero_colores = sizeof($_POST['pizzas']);
$cont = 0;

if (isset($_POST['pizzas'])) {

    for ($i = 0; $i < $numero_colores; $i++) {

        if (empty($_POST['pizzas'][$i])) {
            $cont++;
        } else {

            fwrite($ar, "|");
            fwrite($ar, $_POST['pizzas'][$i]);
            fwrite($ar, $_POST['cantidad'][$cont - 1]);
            fwrite($ar, "|");
            $cont++;
        }
        echo $cont;
    }
}

var_dump($_POST['pizzas']);
var_dump($_POST['cantidad']);



fwrite($ar, PHP_EOL); //PHP_EOL (End Of Line. Introduce un salto de línea)

fclose($ar);
echo "Los datos se guardaron correctamente.";
