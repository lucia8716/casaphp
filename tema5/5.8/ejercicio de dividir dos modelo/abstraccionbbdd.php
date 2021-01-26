<?php

function crearconexion($localhost, $usuario, $clave, $bbdd)
{

    $acceder = mysqli_connect($localhost, $usuario, $clave, $bbdd);
    return $acceder;
}

function datos($acceder, $nombre, $email, $tabla)
{

    $resultado = mysqli_query($acceder, "select $nombre,$email from $tabla");

    return $resultado;
}

function cerrar($conexion)
{

    $cerrar = mysqli_close($conexion);
    return $cerrar;
}

//todos lo mysqli

//en acceso a datos ninguno