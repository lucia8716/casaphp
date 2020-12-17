<?php
$conexion = mysqli_connect("localhost", "root", "", "vuelos") or die("Error en la conexion");

$registros  = mysqli_query($conexion, "select a.coda, a.nombre,a.cuidad,a.pais from aeropuertos a inner join vuelos b on a.coda=b.codAeropuertoSalida where b.fechaSalida=current_date group by a.coda having count (coda) >3 ") or die("Problemas en el select" . mysqli_error($conexion));

while ($reg = mysqli_fetch_array($registros)) {
    echo "nombre:" . $reg['nombre'] . "<br>";
    echo "cuidad:" . $reg['cuidad'] . "<br>";
    echo "pais:" . $reg['pais'] . "<br>";
    echo "<br>";
    echo "<hr>";
}



mysqli_close($conexion);


//select a.coda, a.nombre,a.cuidad,a.pais from aeropuertos a inner join vuelos b on a.coda=b.codAeropuertoSalida where b.fechaSalida=current_date group by a.coda having count (coda) >3