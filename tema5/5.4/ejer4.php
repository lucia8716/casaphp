<?php

if (isset($_COOKIE['cookie'])) {
    echo 'HOLA' . $_COOKIE['cookie'];

    echo '<br>';
    echo '<h1>Arboles</h1>';

    echo '<a href="ejer4c.php">Borrar cookie</a>';
} else {
    echo '<a href="ejer4b.php">Escribe tu nombre</a>';
}
