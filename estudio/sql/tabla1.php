<?php
$conexion = mysqli_connect("localhost", "root", "", "trenes2") or die("Error en la conexion");

mysqli_query($conexion, "insert into  trenes  values ($_POST[numero],'$_POST[fecha_compra]',$_POST[km_recorridos])") or die("Problemas en el select" . mysqli_error($conexion));

echo '<br>';
mysqli_free_result($conexion);

mysqli_close($conexion);
