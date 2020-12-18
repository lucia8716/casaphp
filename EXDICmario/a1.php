<?php
$conexion = mysqli_connect("localhost", "root", "", "vuelos") or die("Error en la conexion");

mysqli_query($conexion, "insert into  aeropuertos  values ($_POST[n1],'$_POST[nombre]','$_POST[cuidad]','$_POST[pais]')") or die("Problemas en el select" . mysqli_error($conexion));

echo '<br>';
mysqli_affected_rows($conexion);

mysqli_close($conexion);
