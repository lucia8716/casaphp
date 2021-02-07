<?php

if (!isset($_COOKIE['cookie'])) {

    echo '<a href="4b.php">Escribe tu nombre</a>';
} else {

    echo 'hola' . $_COOKIE['cookie'] . '<br>';
    echo 'arboles' . '<br>';
    echo '<a href="4.php">Borrar cookie</a>';
    setcookie("cookie", "", time() - 1000);
}
