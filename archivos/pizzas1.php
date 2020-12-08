<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Documento sin título</title>
</head>

<body>

    <form action="pizzas2.php" method="post">
        <p>nombre: <input type="text" name="nombre" size="20" /></p>
        <p>telefono: <input type="text" name="telefono" size="10" /></p>
        <p>jamon y queso: <input type="checkbox" name="pi1" value="jamonyqueso" /> cantidad <input type="number" name="v1" /></p>
        <p>napolitana: <input type="checkbox" name="pi2" value="napolitana:" /> cantidad <input type="number" name="v2" /></p>
        <p>mozarella: <input type="checkbox" name="pi3" value="mozarella:" /> cantidad <input type="number" name="v3" /></p>
        <p><input type="submit" name="submit" value="aceptar." /></p>
    </form>
    <form action="pizzas3.php" method="post">
        <p><input type="submit" name="submit" value="consultar." /></p>
    </form>

</body>

</html>