<?php

require('10a.php');

$r1 = new cone();
$conectar = $r1->conectar();

require('10b.php');
$est = array();
$r2 = new estudiantes($est);
$est = $r2->get_estudiantes($conectar);

require('10c.php');

$r3 = new visu();
$r3->visualizar($est);
$r1->desconectar($conectar);
