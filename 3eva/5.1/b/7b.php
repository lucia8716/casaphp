<?php


function getTodosLosEstudiantes($conexion)
{
    $resultado = mysqli_query($conexion, 'SELECT nombre, contrasena FROM usuarios');
    // crear el array de elementos para la capa de la vista
    $est = array();
    while ($fila = mysqli_fetch_array($resultado)) {
        $est[] = $fila;
    }
    return $est;
}
