</html>


<?php

if (!isset($_COOKIE['ejercicio'])) {


    echo '<a href="ejer1b.php">Escribe tu nombre</a>';
} else {
    setcookie("ejercicio", "", time() - 1000);
    echo '<form method="POST" action="ejer1.php">borrar cookie<input type="submit"></form>';

    // echo '<a href="ejer1.php">Borra cookie</a>';
    //setcookie("ejercicio", "", time() - 1000);
}
