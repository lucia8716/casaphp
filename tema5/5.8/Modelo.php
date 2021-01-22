<?php
function getTodosLosEstudiantes()
{
    $conexion = mysqli_connect("localhost", "root", "", "trenes");
    $resultado = mysqli_query($conexion, 'SELECT email, nombre FROM alumnos');
    // crear el array de elementos para la capa de la vista
    $est = array();
    while ($fila = mysqli_fetch_array($resultado)) {
        $est[] = $fila;
    }
    mysqli_close($conexion);
    return $est;
}
