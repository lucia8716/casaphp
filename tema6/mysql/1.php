<?php
@$conexion = new mysqli('localhost', 'root', '', 'dwes');
//PHP soporta un operador de control de errores: el signo de arroba (@).
//  Cuando se antepone a una expresión en PHP, cualquier mensaje de error que pueda ser generado de forma predeterminada por esa expresión será ignorado.
$error = $conexion->connect_errno;
if ($error != null) {
    echo "<p>Error $error conectando a la base de datos: $conexion->connect_error</p>";
    exit();
}
echo "Conexión establecida correctamente";

$resultado = $conexion->query('create table stock2 as
    (select * from stock where unidades=1);') or die("error de conexión: " . mysqli_error($resultado));

if ($resultado) {
    print "<p>Se ha creado correctamente.</p>";
}

$resultado = $conexion->query('delete from stock where unidades=1') or die("error de conexión: " . mysqli_error($conexion));

if ($resultado) {
    print "<p>Se han borrado $conexion->affected_rows registros.</p>";
}

$resultado = $conexion->query('insert into stock select * from stock2 where unidades=1') or die("error de conexión: " . mysqli_error($conexion));

if ($resultado) {
    print "<p>Se han intertado $conexion->affected_rows registros.</p>";
}

$resultado = $conexion->query('drop table stock2') or die("error de conexión: " . mysqli_error($conexion));

if ($resultado) {
    print "<p>Se han borrado la tabla</p>";
}


$conexion->close();
