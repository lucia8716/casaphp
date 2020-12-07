<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Trenes</h1>


    <form method="POST" action="trenes.php">
        Numero de tren <input name="numero" type="number"><br>
        Fecha de compra <input name="fecha_compra" type="date"><br>
        Km recorridos <input name="km" type="number"><br>
        <input type="submit"><br></form>
    <form method="POST" action="trenes_consulta2.php"><input type="submit" value="consulta"></form>
    <form method="POST" action="trenes_consulta3.php">

        Eliminar billetes con fecha<input name="f_c" type="date"><input type="submit" value="eliminar"></form>



    <br><br><br>

    <h1>ESTACIONES</h1>
    <form method="POST" action="estaciones.php">
        Codigo de la estacion <input name="numeroestacion" type="number"><br>
        Nombre <input name="nombre" type="text"><br>
        Poblacion <input name="poblacion" type="text"><br>
        <input type="submit"><br>
    </form>

    <h1>Recorridos</h1>
    <form method="POST" action="recorridos.php">
        tren <input name="tren" type="number"><br>
        estacion <input name="estacion" type="number"><br>
        <input type="submit"><br>
    </form>




</body>

</html>