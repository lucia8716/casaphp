<?php
@$conexion = new mysqli('localhost', 'root', '', 'dwes');
$error = $conexion->connect_errno;
if ($error == null) {
    $conexion->autocommit(false);
    $resultado1 = $conexion->query("update stock set unidades=1 where producto='3DSNG' and tienda=1") or die("error de conexión: " . mysqli_error($conexion));

    if ($resultado1) {
        print "<p>Se ha insertado $conexion->affected_rows registro.</p>";
    }

    $resultado2 = $conexion->query("insert into stock values('3DSNG',3,1)") or die("error de conexión: " . mysqli_error($conexion));
    if ($resultado2) {
        print "<p>Se ha insertado $conexion->affected_rows registro.</p>";
    }


    if ($resultado1 && $resultado2) $conexion->commit();
    else $conexion->rollback();
}

$conexion->close();
