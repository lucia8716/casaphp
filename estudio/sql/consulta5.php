<?php

$conexion = mysqli_connect("localhost", "root", "", "trenes") or die("Error en la conexion");

$registros = mysqli_query($conexion, "update  trenes set FECHA_COMPRA ='$_POST[f_c2]' where NUMERO=1;") or die("Problemas con la select" . mysqli_error($conexion));

echo "numero de resgitros afectados: " . mysqli_affected_rows($conexion);
mysqli_close($conexion);
