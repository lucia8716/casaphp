<?php
$conexion = mysqli_connect("localhost", "root", "", "trenes") or die("Error en la conexion");

if (!isset($_GET['inicio'])) {
    $inicio = 0;
} else {
    $inicio = $_GET['inicio'];
}

$resultado = mysqli_query($conexion, "SELECT cod_tren,cod_estacion FROM recorridos LIMIT $inicio,2 ") or die("Error en la consulta");
$row = $resultado->num_rows;


while ($reg = mysqli_fetch_array($resultado)) {
    echo "TREN:" . $reg['cod_tren'] . "</br>";
    echo "ESTACIÓN:" . $reg['cod_estacion'] . "</br>";
}

if ($inicio == 0) {
    echo "Anterior";
} else {

    $desdenuevo = $inicio - 2;
    echo '<a href="1.php?inicio=' . $desdenuevo . '">Anterior</a>';
}



if ($row < 2) {
    echo "siguiente";
} else {

    $despues = $inicio + 2;
    echo '<a href="1.php?inicio=' . $despues . '">Siguiente</a>';
}



mysqli_close($conexion);
