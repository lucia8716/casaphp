<?php

$contador;


if (!isset($_GET['inicio'])) {
    $contador = 0;
} else {
    $contador = $_GET['inicio'];
}

$conexion = mysqli_connect('localhost', 'root', '', 'bbdd_farmacia');
$consulta = mysqli_query($conexion, "select * from medicamentos LIMIT $contador,2") or die(mysqli_error($conexion));
$row = $consulta->num_rows;

while ($reg = mysqli_fetch_array($consulta)) {

    echo "$reg[nombre]" . '   ' . "$reg[farmaceutica]" . '<br>';

    echo '<hr>';
}

if ($contador == 0) {

    echo 'anterior';
} else {

    $anterior = $contador - 2;
    echo '<a href="3.php?inicio=' . $anterior . '">Anterior</a>';
}

if ($row < 2) {

    echo 'Siguiente';
} else {

    $siguiente = $contador + 2;
    echo '<a href="3.php?inicio=' . $siguiente  . '">Anterior</a>';
}


mysqli_close($conexion);
