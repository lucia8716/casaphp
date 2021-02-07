<?php
session_start();
$nombre = $_POST['correo'];

$conexion = mysqli_connect('localhost', 'root', '', 'dwestema5');
$consulta = mysqli_query($conexion, "select * from usuarios where usuario = '$_POST[correo]'") or die(mysqli_error($conexion));
$consulta2 = mysqli_query($conexion, "select contrasena from usuarios where usuario = '$_POST[correo]'") or die(mysqli_error($conexion));


$row = mysqli_num_rows($consulta);

if ($row == 0) {

    echo 'usuario no existente en la bbdd';
} else {

    $_SESSION['email'] = 1;
}

echo '<a href="6c.php">Ver contenido de la pagina</a>';
