<?php
include('ejer9.php');

class mario implements metodos
{

    protected $nombre;
    protected $apellido;
    protected $genero;

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */


    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of apellido
     */
    public function getApellidos()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */
    public function setApellidos($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }



    public function __construct($nom, $prov, $sueldo)
    {

        $this->nombre = $nom;
        $this->apellido = $prov;
        $this->genero = $sueldo;
    }
}
