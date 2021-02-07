<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="submit">
</body>

</html>
<?php
header('Content-Type: text/html; charset=UTF-8');
if (!isset($_SERVER['PHP_AUTH_USER'])) {


    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Usuario no identificado";
    exit;
} else {

    $conexion = mysqli_connect('localhost', 'root', '', 'dwestema5');
    //mysqli_query($conexion, "select * from usuarios where usuario = '$_SERVER[PHP_AUTH_USER]'");

    $consulta = mysqli_query($conexion, "select * from usuarios where usuario = '$_SERVER[PHP_AUTH_USER]'") or die(mysqli_error($conexion));
    $conteo = mysqli_num_rows($consulta);

    if ($conteo == 0) {
        echo 'usuario no registrado';
    } else {


        $consulta2 = mysqli_query($conexion, "select * from usuarios where usuario = '$_SERVER[PHP_AUTH_USER]' and contrasena=md5('$_SERVER[PHP_AUTH_PW]')") or die(mysqli_error($conexion));

        $conteo2 = mysqli_num_rows($consulta2);

        if ($conteo2 == 1) {
            echo 'nombre' . $_SERVER['PHP_AUTH_USER'];
            echo 'apellido' . $_SERVER['PHP_AUTH_PW'];
        } else {
            echo 'contraseña incorrecta';
        }
    }
}
