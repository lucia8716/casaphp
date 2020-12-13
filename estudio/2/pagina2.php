<?php
$ar = fopen("datos.txt", "a") or die("Problemas en la creacion");
fwrite($ar, $_REQUEST['num']);
fwrite($ar, "|");
fwrite($ar, $_REQUEST['nom']);
fwrite($ar, "|");

if (isset($_REQUEST['jamonyqueso'])) {
    fwrite($ar, $_REQUEST['jamonyqueso']);
    fwrite($ar, '-');
    fwrite($ar, $_REQUEST['can1']);
    fwrite($ar, "|");
}

if (isset($_REQUEST['mozzarella'])) {
    fwrite($ar, $_REQUEST['mozzarella']);
    fwrite($ar, '-');
    fwrite($ar, $_REQUEST['can2']);
    fwrite($ar, "|");
}

if (isset($_REQUEST['napolitana'])) {
    fwrite($ar, $_REQUEST['napolitana']);
    fwrite($ar, '-');
    fwrite($ar, $_REQUEST['can3']);
    fwrite($ar, "|");
}
fwrite($ar, PHP_EOL);

fclose($ar);
