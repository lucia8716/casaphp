<?php

require_once('7.php');

$conexion = conectar();
require_once('7b.php');
$est = getTodosLosEstudiantes($conexion);
require('7d.php');
