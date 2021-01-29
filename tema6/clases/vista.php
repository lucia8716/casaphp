<?php


class vista
{

    function visualizar($est)
    {

        while ($reg = mysqli_fetch_array($est)) {
            echo "nombre:" . $reg['nombre'] . "<br>";
            echo "constrasena:" . $reg['constrasena'] . "<br>";
            echo "<br>";
            echo "<hr>";
        }
    }
}
