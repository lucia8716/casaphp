<?php
require('ejer9b.php');


$persona1 = new Mario('Mario', 'crespo', 'masculino');

$persona1->getGenero();
$persona1->setGenero('masculino');


echo $persona1->getNombre();
