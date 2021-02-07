<?php


class cone
{



    public  static function  conectar()
    {
        $conectar = mysqli_connect("localhost", "root", "", "bbdd_parking");

        return $conectar;
    }


    public  static function  desconectar($conectar)
    {
        mysqli_close($conectar);
    }
}
