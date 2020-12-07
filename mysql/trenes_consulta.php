<?php
$conexion = mysqli_connect("localhost", "root", "", "trenes") or die("Error en la conexion");
$registros = mysqli_query($conexion, "select numero,fecha_compra ,km_recorridos from trenes") or die("Problemas en el select:");
while ($reg = mysqli_fetch_array($registros))
//Para recuperar  registro a registro los datos obtenidos por el select hay que llamar a la función mysqli_fetch_array()
{
    echo "Numero de tren:" . $reg['numero'] . "<br>";
    echo "fecha de compra:" . $reg['fecha_compra'] . "<br>";
    echo "km recorridos:" . $reg['km_recorridos'] . "<br>";

    echo "<br>";
    echo "<hr>";
}
mysqli_close($conexion);
