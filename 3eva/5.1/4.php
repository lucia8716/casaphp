<?php
//unset($_SERVER);
$conexion = mysqli_connect("localhost", "root", "", "dwesTema5");

//mysqli_query($conexion, "INSERT INTO usuarios VALUES('dwes',md5('abc123.'));");


header('Content-Type: text/html; charset=UTF-8');

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Has pulsado cancelar!";
    exit;
} else {
    $nombre = mysqli_query($conexion, "select * from usuarios where usuario='$_SERVER[PHP_AUTH_USER]' and contrasena =md5('$_SERVER[PHP_AUTH_PW]')") or die("Error en la conexion" . mysqli_error($conexion));

    if (mysqli_num_rows($nombre) > 0) {
        echo "entrando";
    } else {
        echo "<p>Has pulsado INICIAR SESION</p>";
        echo "<p>Usuario: {$_SERVER['PHP_AUTH_USER']}</p>";
        echo "<p>Contraseña: {$_SERVER['PHP_AUTH_PW']} </p>";
    }
}

mysqli_close($conexion);
