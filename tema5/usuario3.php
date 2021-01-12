<?php
//unset($_SERVER);
$conexion = mysqli_connect("localhost", "root", "", "dwesTema5") or die("Error en la conexion");
mysqli_query($conexion, "INSERT INTO usuarios VALUES('dwes',md5('abc123.')") or die("Problemas en el select" . mysqli_error($conexion));


header('Content-Type: text/html; charset=UTF-8');

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Has pulsado cancelar!";
    exit;
} else {
    //echo "<p>Has pulsado INICIAR SESION</p>";

    //mysqli_fetch_array()---para tratar datos de uno en uno

    $busquedas = mysqli_query($conexion, "select usuario from usuarios where usuario= " . $_SERVER['PHP_AUTH_USER'] . "and contrasena=" . md5($_SERVER['PHP_AUTH_PW']) . "");


    if (mysqli_num_rows($busquedas) == 0) {

        echo 'incorrecto';
    } else {

        echo 'correcto';
    }
}
