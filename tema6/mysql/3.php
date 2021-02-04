<?php

if ($_POST["reg[cod]"]) {

    echo 'select de combos<br><br>';
    echo '*************************************<br><br>';

    $resultado2 = $conexion->query('SELECT * from stock where cod="' . $_POST["reg[cod]"] . '";') or die("error de conexión: " . mysqli_error($conexion));
    while ($reg2 = $resultado2->fetch_array()) {
        echo 'unidades en stock' . $reg['unidades'];
    }
    mysqli_close($conexion);
}
