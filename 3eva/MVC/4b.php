<?php

require('4a.php');


$conex = conectar();
function busqueda()
{

    $conex = conectar();
    $resultado = mysqli_query($conex, 'SELECT nombre, contrasena FROM usuarios');
    $est = array();
    while ($fila = mysqli_fetch_array($resultado)) {
        $est[] = $fila;
    }

    return $est;
}

desconectar($conex);
