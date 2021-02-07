<?php

class visu
{

    function visualizar($est)
    {


        foreach ($est as $key) {

            echo 'nombre: ' . $key['nombre'] . '     ' . 'contraseña: ' . $key['contrasena'] . '<br>';
        }
    }
}
