<?php
echo '<h1>Listado de stock del articulo selccionado</h1>';
@$conexion =  new mysqli('localhost', 'root', '', 'dwes');
$error = $conexion->connect_errno;
if ($error != null) {
    echo 'error en la base de datos';
} else {
    if (!isset($_POST['seleccionar'])) {
        $consulta = $conexion->query('select cod,nombre_corto from producto');
        echo 'producto';
        echo '<form method="POST" action="3.php">
<select name="seleccionar">';
        while ($filas = $consulta->fetch_array()) {
            echo "<option value='$filas[cod]'>$filas[nombre_corto]</option>";
        }
        echo '</select> <input type="submit"></form>';
    }
    if (isset($_POST['seleccionar'])) {
        $consulta = $conexion->query('select cod,nombre_corto from producto');
        echo 'producto';
        echo '<form method="POST" action="3.php">
<select name="seleccionar">';
        while ($filas = $consulta->fetch_array()) {
            echo "<option value='$filas[cod]'>$filas[nombre_corto]</option>";
            if ($_POST['seleccionar'] == $filas['cod']) {
                echo "<option value='$filas[cod]' selected>$filas[nombre_corto]</option>";
            }
        }
        echo '</select> <input type="submit"></form>';
        echo '******************************************************************';
        $consulta2 = $conexion->query("select cod,nombre_corto from producto where cod='$_POST[seleccionar]'") or die($conexion->error);;

        while ($filas = $consulta2->fetch_array()) {
            echo 'codigo' . $filas['cod'] . 'nombre corto' . $filas['nombre_corto'] . '<br>';
        }
    }
}
