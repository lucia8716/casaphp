<?php
$conexion = mysqli_connect("localhost", "root", "", "trenes2") or die("Error en la conexion");

mysqli_query($conexion, "insert into  recorridos  values ($_POST[r1],$_POST[r2])") or die("Problemas en el select" . mysqli_error($conexion));

echo '<br>';


mysqli_close($conexion);
