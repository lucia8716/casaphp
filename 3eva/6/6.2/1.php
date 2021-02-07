<?php

@$conexion =  new mysqli('localhost', 'root', '', 'dwes');
$error = $conexion->connect_errno;

if ($error != null) {

    echo 'error en la base de datos';
} else {

    echo 'entradndo';
}
