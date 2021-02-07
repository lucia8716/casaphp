<?php

function estudiantes()
{
    $conexion = mysqli_connect("localhost", "root", "", "bbdd_parking");
    $resultado = mysqli_query($conexion, 'SELECT nombre, contrasena FROM usuarios');
    $est = array();
    while ($fila = mysqli_fetch_array($resultado)) {
        $est[] = $fila;
    }
    mysqli_close($conexion);

    return $est;
}
