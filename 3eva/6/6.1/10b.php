<?php

class estu
{


    private $est = array();

    public function __construct($est)
    {
        $this->est = $est;
    }


    function getEstudiantes($conectar)
    {
        $sql = "select * from usuarios";
        $res = mysqli_query($conectar, $sql);

        while ($re = mysqli_fetch_array($res)) {

            $this->est[] = $re;
        }
        return $this->est;
    }
}
