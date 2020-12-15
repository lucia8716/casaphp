<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php



    if (!$_POST) {
        echo '<form method="POST" action="">
dar de baja menos de <input type="submit" name="pregunta1" value="pregunta1"><br>
añadir columna <input type="submit" name="pregunta2" value="pregunta2"><br>
añadir columna <input type="submit" name="pregunta3" value="pregunta3"><br>
</form>';
    } elseif (isset($_POST['pregunta1'])) {
        $conexion = mysqli_connect("localhost", "root", "", "trenes") or die("Error en la conexion");
        $registros = mysqli_query($conexion, "create table if not exists trenes_viajeros select * from trenes where FECHA_COMPRA<'2020-12-20'") or die("Problemas con la select" . mysqli_error($conexion));
        $registros = mysqli_query($conexion, "delete from trenes where FECHA_COMPRA<'2020-12-20'") or die("Problemas con la select" . mysqli_error($conexion));
        echo "numero de resgitros afectados: " . mysqli_affected_rows($conexion);
        mysqli_close($conexion);
    } elseif (isset($_POST['pregunta2'])) {
        $conexion = mysqli_connect("localhost", "root", "", "trenes") or die("Error en la conexion");
        $registros = mysqli_query($conexion, "ALTER TABLE trenes ADD capacidad_viajeros_sentados int") or die("Problemas con la select" . mysqli_error($conexion));
        echo "numero de resgitros afectados: " . mysqli_affected_rows($conexion);
        mysqli_close($conexion);
    } elseif (isset($_POST['pregunta3'])) {
        $conexion = mysqli_connect("localhost", "root", "", "trenes") or die("Error en la conexion");
        $registros = mysqli_query($conexion, "insert into trenes values(989787,current_date,3445,33)") or die("Problemas con la select" . mysqli_error($conexion));
        echo "numero de resgitros afectados: " . mysqli_affected_rows($conexion);
        mysqli_close($conexion);
    }


    ?>





</body>

</html>