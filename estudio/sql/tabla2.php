<?php
$conexion = mysqli_connect("localhost", "root", "", "trenes2") or die("Error en la conexion");

mysqli_query($conexion, "insert into  estaciones values ($_POST[numero_tren],'$_POST[nombre]','$_POST[poblacion]');") or die("Problemas en el select" . mysqli_error($conexion));

echo '<br>';

mysqli_close($conexion);
