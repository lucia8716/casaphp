
<?php

$nombre;
if (!$_POST) {
    echo '<form method="POST" action="">
escribe tu nombre <input type="text" name="n1"><input type="submit">
</form>';
} else {

    echo '<a href="ejer4.php">VER CONTENIDO PAGINA</a>';
    setcookie("cookie", $_POST['n1']);
}




?>


