<?php
//unset($_SERVER);

//mysqli_query($conexion, "INSERT INTO usuarios VALUES('dwes',md5('abc123.')") or die("Problemas en el select" . mysqli_error($conexion));


header('Content-Type: text/html; charset=UTF-8');

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Has pulsado cancelar!";
    exit;
} else {
    //echo "<p>Has pulsado INICIAR SESION</p>";

    //mysqli_fetch_array()---para tratar datos de uno en uno

    $conexion = mysqli_connect("localhost", "root", "", "dwesTema5") or die("Error en la conexion");
    //mysqli_query($conexion, "INSERT INTO usuarios VALUES('dwes',md5('abc123.'))");

    $busquedas = mysqli_query($conexion, "select usuario from usuarios where usuario= " . "'" . $_SERVER['PHP_AUTH_USER'] . "'" . "and contrasena=" . "'" . $_SERVER['PHP_AUTH_PW'] . "'" . ";") or die("Problemas en el select" . mysqli_error($conexion));

    //$registro = mysqli_query($conexion, "SELECT usuario FROM usuarios
    //WHERE usuario='$_SERVER[PHP_AUTH_USER]' AND contrasena=md5('$_SERVER[PHP_AUTH_PW]')");

    if (mysqli_num_rows($busquedas) == 0) {
        echo md5($_SERVER['PHP_AUTH_PW']);
        echo " ";
        echo $_SERVER['PHP_AUTH_PW'];
        echo " ";
        echo " ";
        echo $_SERVER['PHP_AUTH_USER'];
        echo " ";
        echo 'incorrecto';
    } else {

        echo 'correcto';
    }
}


/* hecho por pilar   <?php
//unset($_SERVER);
// Si el usuario aún no se ha autentificado, pedimos las credenciales
if (!isset($_SERVER['PHP_AUTH_USER'])) {
header('WWW-Authenticate: Basic realm="Contenido restringido"');
header("HTTP/1.0 401 Unauthorized");
exit;
}
// Si ya ha enviado las credenciales, las comprobamos con la base de datos
else{

// Conectamos a la base de datos
 $conexion = mysqli_connect("localhost", "root", "", "dwes") or die("Error");
// Si se estableció la conexión
// Ejecutamos la consulta para comprobar si existe
// esa combinación de usuario y contraseña

$registro = mysqli_query ($conexion,"SELECT usuario FROM usuarios
WHERE usuario='$_SERVER[PHP_AUTH_USER]' AND contrasenya=md5('$_SERVER[PHP_AUTH_PW]')");
//aquí se puede colocar
if(mysqli_num_rows($registro)==0 ) echo "mal"; else  echo "bien";
// o también así:
$reg=mysqli_fetch_array($registro);
if($reg==true) //con $registro no funciona
    echo "bien";
else
    echo "mal";
//otra manera

mysqli_close($conexion);
}

?>*/