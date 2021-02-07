<?php

@$conexion = new mysqli('localhost', 'root', '', 'dwes');

$error = $conexion->connect_errno;

if ($error == null) {

    /* $resultado1 = $conexion->query('create table stock2 as (select * from stock where unidades=1)') or die($conexion->error);
    if ($resultado1) {
        echo 'se ha creado la tabla';
    }

    $resultado2 = $conexion->query('delete from stock where unidades=1') or die($conexion->error);
    if ($resultado2) {
        echo 'se han borrado ' . $conexion->affected_rows;
    }*/

    $resultado3 = $conexion->query('insert into stock select * from stock2 where unidades=1') or die($conexion->error);

    if ($resultado3) {
        echo 'se han insertado ' . $conexion->affected_rows;
    }

    $resultado4 = $conexion->query('delete from stock2') or die($conexion->error);

    if ($resultado4) {
        echo 'se han insertado ' . $conexion->affected_rows;
    }
}
