<?php

include('ejer9.php');

class mario implements metodos
{

    private $nombre;
    private $apellidos;
    private $genero;

    public function __construct($nombre, $apellidos, $genero)
    {
        $this->nombre = $nombre;
        $this->provincia = $apellidos;
        $this->sueldo = $genero;
    }



    public function getGenero()
    {
        return $this->genero;
    }


    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }


    public function getApellidos()
    {
        return $this->apellidos;
    }


    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }


    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
}
