<?php
//unset($_SERVER);

header('Content-Type: text/html; charset=UTF-8');

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Has pulsado cancelar!";
    exit;
} else {
    //echo "<p>Has pulsado INICIAR SESION</p>";

    if ($_SERVER['PHP_AUTH_USER'] == 'dwes' || $_SERVER['PHP_AUTH_PW'] == 'abc123') {

        echo 'entrando';
    } else {


        echo "<p>Usuario:" . $_SERVER['PHP_AUTH_USER'] . "</p>";
        echo "<p>Contraseña:" . $_SERVER['PHP_AUTH_PW'] . "</p>";
    }
}
