<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>

    <?php
    $conexion = mysqli_connect("localhost", "root", "", "bbdd_farmacia") or die("Error en la conexion");
    $est = array();
    $sql = "select * from usuarios";
    $res = mysqli_query($conexion, $sql);
    while ($reg = mysqli_fetch_assoc($res)) {
        //vamos a guardar cada registro como un array asociativo

        //mysqli_fetch_assoc($res) es lo mismo que mysqli_fetch_array($res,MYSQLI_ASSOC) 

        $est[] = $reg;
    }
    for ($i = 0; $i < sizeof($est); $i++) {

        $id = $est[$i]['nombre'];
        $nom = $est[$i]['contrasena'];

        echo <<<visualizacion
Identificación: <input type='text' value='$id'/>
<br />
Nombre Completo: <input type='text' value='$nom'/>
<br />
<hr />
visualizacion;
    }
    ?>
</body>

</html>