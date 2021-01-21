<?php

session_start();


if (isset($_SESSION['email'])) {

    echo 'bienvenido';
    echo '<br><a href="form1.php">Ir a pagina 1</a>';
    unset($_SESSION['email']);
} else {

    echo 'no existe email, no puede visitar pagina';
    echo '<br><a href="form1.php">Ir a pagina 1</a>';
}
