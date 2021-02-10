<?php

class estudiantes
{
    private $est = array();

    public function __construct($es)
    {
        $this->est = $es;
    }


    public function get_estudiantes($conexion)
    {

        $resultado = mysqli_query($conexion, 'SELECT * FROM usuarios');


        while ($reg = mysqli_fetch_array($resultado)) {

            $this->est[] = $reg;
        }

        return $this->est;
    }
}
