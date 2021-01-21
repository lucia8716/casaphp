<?php

session_start();

$nombre;

$conexion = mysqli_connect("localhost", "root", "", "trenes") or die("Error en la conexion");
$registros  = mysqli_query($conexion, "select nombre from alumnos where email ='$_POST[email]'") or die("Problemas en el select" . mysqli_error($conexion));



if ($reg = mysqli_fetch_array($registros)) {
    $nombre = $reg['nombre'];
}

$_SESSION['email'] = $nombre;





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br /><a href="form3.php">Ir a a la pagina </a>
</body>

</html>