<?php

if (!isset($_COOKIE['cookie'])) {

    echo '<a href="41b.php">escribe tu nombre</a>';
} else {

    echo 'HOLA' . $_COOKIE['cookie'];
    setcookie("cookie", "", time() - 1000);
    echo '<a href="41.php">borrar cokkie</a>';
}
