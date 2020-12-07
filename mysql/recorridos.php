<?php
$conexion = mysqli_connect("localhost", "root", "", "trenes") or die("Error en la conexion");
mysqli_query($conexion, "insert into  recorridos  values ($_POST[tren],$_POST[estacion])") or die("Problemas en el select");
mysqli_close($conexion);
