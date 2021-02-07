<?php

class Persona
{
    protected $nombre;

    protected $apellido;

    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function visualizar()
    {
        echo 'su nombre es:' . $this->nombre . ' y su apellido es: ' . $this->apellido . '<br>';
    }
}

class empleado extends Persona
{
    protected $sueldo;
    public function __construct($nombre, $apellido, $sueldo)
    {
        parent::__construct($nombre, $apellido);
        $this->sueldo = $sueldo;
    }
    public function visualizar()
    {
        parent::visualizar();

        echo 'y su sueldo es: ' . $this->sueldo . '<br>';
    }
}



$n1 = new Persona("Mario", "Crespo");
$n1->visualizar();
$n2 = new empleado("Mario", "Crespo", 3650);
$n2->visualizar();
