<?php


setcookie("cookie", $_POST['mario'], time() + 60 * 60 * 24 * 365);
echo '<a href="41d.php">ver contenido de la pagina</a>';
