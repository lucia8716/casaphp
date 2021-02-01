<?php
$inicio;

if (!isset($_GET['inicio'])) {
    $inicio = 0;
} else {
    $inicio = $_GET['inicio'];
}
$conexion = mysqli_connect("localhost", "root", "", "bbdd_farmacia");
$resultado = mysqli_query($conexion, "select nombre,farmaceutica from medicamentos LIMIT $inicio,2 ") or die(mysqli_error($conexion));
$row = $resultado->num_rows;


while ($reg = mysqli_fetch_array($resultado)) {
    echo "nombre:" . $reg['nombre'] . '<br>';
    echo "framaceutica:" . $reg['farmaceutica'] . '<br>';
    echo "<br>";
    echo "<hr>";
}

if ($inicio == 0) {

    echo 'anterior';
} else {

    $anterior = $inicio - 2;
    echo '<a href="1.php?inicio=' . $anterior . '">Anterior</a>';
}


if ($row < 2) {
    echo 'siguiente';
} else {
    $siguiente = $inicio + 2;
    echo '<a href="1.php?inicio=' . $siguiente . '">Siguiente</a>';
}




mysqli_close($conexion);
