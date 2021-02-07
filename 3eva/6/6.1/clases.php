<?php

abstract class operacion
{
    protected $n1;
    protected $n2;
    protected $resultado;
    public function valorN1($n1)
    {
        $this->n1 = $n1;
    }

    public function valorN2($n2)
    {
        $this->n2 = $n2;
    }

    public function visualizar()
    {
        echo 'el resultado de la operacion es: ' . $this->resultado;
    }

    public abstract function operar();
}




class suma extends operacion
{

    public function operar()
    {
    }

    public function r1()
    {

        $this->resultado = $this->n1 + $this->n2;
    }
}

class resta extends operacion
{

    public function operar()
    {
    }

    public function r1()
    {

        $this->resultado = $this->n1 - $this->n2;
    }
}


$p1 = new suma();
$p1->valorN1(10);
$p1->valorN2(30);
$p1->r1();
$p1->visualizar();
$p2 = new resta();
$p2->valorN1(10);
$p2->valorN2(30);
$p2->r1();
$p2->visualizar();
