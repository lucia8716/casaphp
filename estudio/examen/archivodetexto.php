<?php

$ar=fopen("datos.txt","a") or die("Problemas en la creacion");
fwrite($ar,$_REQUEST['nombre']);
fwrite($ar,"|");
fwrite($ar,$_REQUEST['telefono'].PHP_EOL);
fclose($ar);
