<?php
$conexion = mysqli_connect("localhost", "root", "", "trenes2") or die("Error en la conexion");

$registros = mysqli_query($conexion, "select cod_estacion, nombre from estaciones where poblacion='madrid'") or die("Problemas con la select" . mysqli_error($conexion));


while ($reg = mysqli_fetch_array($registros))
//Para recuperar  registro a registro los datos obtenidos por el select hay que llamar a la función mysqli_fetch_array()
{
    echo "Numero de tren:" . $reg['cod_estacion'] . "<br>";
    echo "fecha de compra:" . $reg['nombre'] . "<br>";

    echo "<br>";
    echo "<hr>";
}
echo mysqli_num_rows($registros);

mysqli_close($conexion);
