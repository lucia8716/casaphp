<?php
$conexion = mysqli_connect("localhost", "root", "", "trenes") or die("Error en la conexion");
$registros = mysqli_query($conexion, "delete  from trenes where FECHA_COMPRA <'2020-01-01'") or die("Problemas con la select" . mysqli_error($conexion));
echo "numero de resgitros afectados: " . mysqli_affected_rows($conexion);
mysqli_close($conexion);
