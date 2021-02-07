<?php

function conectar()
{
    $conexion = mysqli_connect("localhost", "root", "", "bbdd_parking");
    return $conexion;
}


function desconectar($conexion)
{
    mysqli_close($conexion);
}
