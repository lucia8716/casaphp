<?php
$conexion = mysqli_connect("localhost", "root", "", "trenes") or die("Error en la conexion");
mysqli_query($conexion, "delete from trenes where fecha_compra <'$_REQUEST[f_c]'") or die("Problemas en el select:" . mysqli_error($conexion));

mysqli_close($conexion);



//update set fecha = '$_REQUEST[f_c]' where numero ='$_REQUEST[numero]'; 