<?php
$ar = fopen("datos.txt", "a") or die("Problemas en la creacion");
fwrite($ar, $_POST['nombre']);
fwrite($ar, "|"); //separación entre nombre y teléfono
fwrite($ar, $_POST['telefono']);

if (($_POST['cantidad1'] != '') && isset($_POST['jyq'])) {
    fwrite($ar, "|");
    fwrite($ar, "Jamon y queso");
    fwrite($ar, $_POST['cantidad1']);
}

if (($_POST['cantidad2'] != '') && isset($_POST['napo'])) {
    fwrite($ar, "|");
    fwrite($ar, "Napolitana");
    fwrite($ar, $_POST['cantidad2']);
}


if (($_POST['cantidad3'] != '') && isset($_POST['moza'])) {
    fwrite($ar, "|");
    fwrite($ar, "Mozarella");
    fwrite($ar, $_POST['cantidad3'] . PHP_EOL);
}
fwrite($ar, PHP_EOL); //PHP_EOL (End Of Line. Introduce un salto de línea)

fclose($ar);
echo "Los datos se guardaron correctamente.";
