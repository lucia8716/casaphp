<?php
require_once('abstraccionbbdd.php');


function getTodosLosEstudiantes()
{

    $conexion = crearconexion("localhost", "root", "", "trenes");


    $query = datos($conexion, "nombre", "email", "alumnos");

    $est = array();
    while ($fila = mysqli_fetch_array($query)) {
        $est[] = $fila;
    }

    return $est;
    cerrar($conexion);
}

//las selects aqui