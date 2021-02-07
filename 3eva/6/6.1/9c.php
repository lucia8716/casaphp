<?php
require('9b.php');




$r1 = new mario("mario", "crespo", "masculino");

echo 'su nombre es' . $r1->getNombre() . '<br>';
echo 'su apellido es' . $r1->getApellidos() . '<br>';
echo 'su genero es' . $r1->getGenero() . '<br>';
