<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Insert title here</title>
</head>

<body>
    <H2>Seleccionar un archivo para enviar al servidor</H2>
    <form action="pagina3.php" method="post" enctype="multipart/form-data">
        Seleccione el archivo:
        <input type="file" name="foto"><br />
        <input type="submit" value="Enviar">
        <INPUT type='hidden' name='max_file_size' value='2500000'>
    </form>


</body>

</html>