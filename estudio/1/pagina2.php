<?php
$ar = fopen("datos.txt", "a") or die("Problemas en la creacion");
fwrite($ar, $_REQUEST['num']);
fwrite($ar, "|");
fwrite($ar, $_REQUEST['nom'] . PHP_EOL);
fclose($ar);
