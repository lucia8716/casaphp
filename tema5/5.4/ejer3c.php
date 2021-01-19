<?php

if (isset($_COOKIE['cookie'])) {
    echo 'HOLA' . $_COOKIE['cookie'];

    echo '<br>';
    echo '<h1>Arboles</h1>';
} else {
    echo '<a href="ejer3b.php">Escribe tu nombre</a>';
}
