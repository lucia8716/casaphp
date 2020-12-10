<?php
$conexion = mysqli_connect("localhost", "root", "", "trenes") or die("Error en la conexion");
$registros = mysqli_query($conexion, "update trenes set fecha_compra ='$_POST[f2]' where numero=$_POST[n1] and fecha_compra='$_POST[f1]'") or die("Problemas en el select:. mysqli_error($conexion)");



printf("Registros actulizados: %d\n", mysqli_affected_rows($conexion));

mysqli_close($conexion);





//update set fecha_compra ='$_POST[f2]' from trenes where numero=$_POST[n1] and fecha_compra='$_POST[f1]'
/*mysqli_query($conexion,"create table if not exists trenes_viejos as select * from trenes where fecha_compra<'2000-01-01'") or die("Problemas en el select:".mysqli_error());
mysqli_query($conexion,"delete from trenes where numero=fecha_compra<'2000-01-01'") or die("Problemas en el select:".mysqli_error());*/