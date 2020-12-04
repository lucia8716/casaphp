<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 3 : Características del Lenguaje PHP -->
<!-- Ejemplo: Procesar datos post -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Desarrollo Web</title>
</head>

<body>
    <?php
    $nombre = $_POST['nombre'];
    $modulos = $_POST['modulos'];

    $cantidad = sizeof($modulos);


    print "Nombre: " . $nombre . "<br />";


    if (isset($_POST['modulos'][0])) {

        print "Modulo: " . $modulos[0] . "<br />";
    }

    if (isset($_POST['modulos'][1])) {
        print "Modulo: " . $modulos[1] . "<br />";
    }







    ?>
</body>

</html>