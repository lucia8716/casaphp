<?php

class persona
{
    protected $n1;
    protected $n2;
    protected $resultado;


    public function n1($v)
    {


        $this->n1 = $v;
    }
    public function n2($v)
    {
        $this->n2 = $v;
    }

    public function visulizar()
    {
        echo $this->resultado;
    }
}

class Perro extends persona
{


    public function operacion()
    {

        $this->resultado = $this->n1 + $this->n2;
    }
}

class resta extends persona
{


    public function operacion()
    {

        $this->resultado = $this->n1 - $this->n2;
    }
}

$mario = new Perro();

$r1->n1(40);
$r1->n2(40);
$r1->operacion();
$r1->visualizar();
