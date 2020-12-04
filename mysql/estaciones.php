<?php
$conexion = mysqli_connect("localhost", "root", "", "trenes") or die("Error en la conexion");
mysqli_query($conexion, "insert into  estaciones  values ($_POST[numeroestacion],'$_POST[nombre]','$_POST[poblacion]');") or die("Problemas en el select");
mysqli_close($conexion);
