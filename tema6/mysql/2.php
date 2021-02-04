<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="$_POST"></form>
    <h1>Listado de stock del articulo seleccionado</h1>
    <?php
    @$conexion = new mysqli('localhost', 'root', '', 'dwes');
    //PHP soporta un operador de control de errores: el signo de arroba (@).
    //  Cuando se antepone a una expresión en PHP, cualquier mensaje de error que pueda ser generado de forma predeterminada por esa expresión será ignorado.
    $error = $conexion->connect_errno;
    if ($error != null) {
        echo "<p>Error $error conectando a la base de datos: $conexion->connect_error</p>";
        exit();
    }

    $resultado = $conexion->query('SELECT cod,nombre_corto from producto;') or die("error de conexión: " . mysqli_error($conexion));




    echo '<form method="post" action="2.php"> <select name="select">';


    while ($reg = $resultado->fetch_array()) {
        echo "<option value=$reg[cod]>$reg[nombre_corto]</option>";
    }

    echo '</select><input type="submit"></form><br><br>';



    if (isset($_POST['select'])) {

        echo 'select de combos<br><br>';
        echo '*************************************<br><br>';

        $resultado2 = $conexion->query('SELECT t.nombre,s.unidades from tienda t inner join stock s on t.cod =s.tienda where s.producto="' . $_POST["select"] . '";') or die("error de conexión: " . mysqli_error($conexion));
        while ($reg2 = $resultado2->fetch_array()) {
            echo 'unidades en tienda ' . $reg2['nombre'] . ':' . $reg2['unidades'] . ':unidades<br>';
        }
    }

    $conexion->close();




    ?>




</body>

</html>