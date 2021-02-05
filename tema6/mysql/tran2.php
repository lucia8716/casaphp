<?php
@$conexion = new mysqli('localhost', 'root', '', 'dwes');
$error = $conexion->connect_errno;
if ($error == null) {
    $conexion->autocommit(false);
    $resultado1 = $conexion->query("insert into producto values('produc1',NULL,'prd1',NULL,0,'MP3')");
    if ($resultado1) {
        $muestra1 = $conexion->affected_rows;
    } else echo "error1";
    $resultado2 = $conexion->query("insert into stock values('produc11',1,60)"); //error al escribir, se queria poner: produc1
    if ($resultado2) {
        $muestra2 = $conexion->affected_rows;
    } else echo "error2";
    if ($resultado1 && $resultado2) {
        $conexion->commit();
        print "<p>Se ha insertado $muestra1 registro.</p>";
        print "<p>Se ha insertado $muestra2 registro.</p>";
    } else $conexion->rollback();
}

$conexion->close();
