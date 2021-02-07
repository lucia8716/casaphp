<?php


class estudiantes
{




    private $est = array();

    protected $property;

    public function __construct()
    {
    }


    function getEstudiantes($conexion)
    {

        $resultado = mysqli_query($conexion, 'select * from estudiantes') or die("Problemas en el select" . mysqli_error($conexion));


        while ($row = mysqli_fetch_array($resultado)) {

            $this->est[] = $row;
        }



        return $this->est;


        conectar::cerrarconexion($conexion);
    }
}
