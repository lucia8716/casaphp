<?php
$conexion = mysqli_connect("localhost", "root", "", "trenes") or die("Error en la conexion");
$registros = mysqli_query($conexion, "select cod_estacion,nombre from estaciones") or die("Problemas en el select:");
while ($reg = mysqli_fetch_array($registros))
//Para recuperar  registro a registro los datos obtenidos por el select hay que llamar a la función mysqli_fetch_array()
{
    echo "cod_estacion:" . $reg['cod_estacion'] . "<br>";
    echo "nombre:" . $reg['nombre'] . "<br>";

    echo "<br>";
    echo "<hr>";
}
mysqli_close($conexion);



//
//select count(*) from estaciones where poblacion="bilbao";
//select b.nombre,a.numero,a.fecha_compra from estaciones b, trenes a where a.numero in (select distinct numero from recorridos);
