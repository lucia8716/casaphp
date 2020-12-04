<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Documento sin título</title>
</head>

<body>

    <form action="pagina3.php" method="post">
        <p>nombre: <input type="text" name="nombre" size="20" /></p>
        <p>telefono: <input type="text" name="telefono" size="10" /></p>
        <p>jamon y queso: <input type="checkbox" name="jyq" /></p>
        <p>cantidad: <input type="number" name="cantidad1" /></p><br><br>
        <p>Napolitana: <input type="checkbox" name="napo" /></p>
        <p>cantidad: <input type="number" name="cantidad2" /></p><br><br>
        <p>Mozzarela: <input type="checkbox" name="moza" /></p>
        <p>cantidad: <input type="number" name="cantidad3" /></p><br><br>

        <p><input type="submit" name="submit" value="aceptar." /></p>
        <p><input type="reset" name="submit" value="borrar" /></p>
    </form>
</body>

</html>