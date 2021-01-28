<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>

    <?php
    $conexion = mysqli_connect("localhost", "root", "", "bbdd_farmacia") or die("Error en la conexion");
    $est = array();
    $leyendas = ['nombre', 'contrasena'];
    $sql = "select * from usuarios";
    $res = mysqli_query($conexion, $sql);
    while ($reg = mysqli_fetch_assoc($res)) {
        //vamos a guardar cada registro como un array asociativo

        //mysqli_fetch_assoc($res) es lo mismo que mysqli_fetch_array($res,MYSQLI_ASSOC) 

        $est[] = $reg;
    }

    foreach ($est as $fila) {
        $indice = 0;


        foreach ($fila as $columna) {


            echo $leyendas[$indice] . "<input type='text' value='$columna'/>" . '<br>';
            $indice++;
        }
        echo '<hr>';
    }




    ?>
</body>

</html>