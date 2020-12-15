<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="tabla1.php">
        numero<input type="number" name="numero"><br>
        fecha compra <input type="date" name="fecha_compra"><br>
        km recorridos <input type="number" name="km_recorridos"><br>
        <input type="submit"><br>
    </form>
    <form method="POST" action="consulta1.php">
        <input type="submit" value="consulta1"><br>
    </form>
    <form method="POST" action="consulta4.php">
        <input type="submit" value="consulta4"><br>
    </form>
    <form method="POST" action="consulta5.php">
        fecha compra a modificar<input type="date" name="f_c2"><br>
        <input type="submit" value="consulta5"><br>
    </form>


    <br><br>
    <form method="POST" action="tabla2.php">
        cod_estacion<input type="number" name="numero_tren"><br>
        nombre <input type="texto" name="nombre"><br>
        poblacion <input type="texto" name="poblacion"><br>
        <input type="submit">
    </form>
    <form method="POST" action="consulta2.php">
        <input type="submit" value="consulta2"><br>
    </form>
    <form method="POST" action="consulta3.php">
        <input type="submit" value="consulta3"><br>
    </form>

    <form method="POST" action="tabla3.php">
        numero<input type="number" name="r1"><br>
        cod_estacion<input type="number" name="r2"><br>
        <input type="submit">
    </form>



</body>

</html>