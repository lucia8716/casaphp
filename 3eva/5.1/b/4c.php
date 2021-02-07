<?php

setcookie("cookie", $_POST['enviar'], time() + 60 * 60 * 24 * 365);
echo '<a href="4d.php">Ver contenido de la pagina</a>';
