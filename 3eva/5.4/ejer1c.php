<?php

$nombre = $_POST['n1'];




setcookie('ejercicio', $nombre, time() + 60 * 60 * 24 * 365);

echo '<a href="ejer1d.php">vercontenido de la pagina</a>';
