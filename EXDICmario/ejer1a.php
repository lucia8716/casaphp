<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Insert title here</title>
</head>

<body>
    <H2>Seleccionar un archivo para enviar al servidor</H2>
    <form action="ejer1b.php" method="post" enctype="multipart/form-data">
        Seleccione el archivo:
        <input type="file" name="fichero"><br />
        Seleccione el archivo:
        <input type="file" name="documento"><br />
        <input type="submit" value="Enviar">
        <INPUT type='hidden' name='max_file_size' value='2500000'>
    </form>


</body>

</html>