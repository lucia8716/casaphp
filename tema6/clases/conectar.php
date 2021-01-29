<?php


class conectar
{


    public static function conexion()
    {

        $conexion = mysqli_connect("localhost", "root", "", "estudiantes");

        return $conexion;
    }


    public static function cerrarconexion($conexion)
    {


        mysqli_close($conexion);
    }
}
