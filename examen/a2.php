<?php
$conexion = mysqli_connect("localhost", "root", "", "vuelos") or die("Error en la conexion");

mysqli_query($conexion, "insert into  vuelos  values ($_POST[n2],'$_POST[f_s]',$_POST[salida],$_POST[llegada],$_POST[pasajeros])") or die("Problemas en el select" . mysqli_error($conexion));

echo '<br>';
mysqli_affected_rows($conexion);

mysqli_close($conexion);
