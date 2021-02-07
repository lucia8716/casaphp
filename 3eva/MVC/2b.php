<html>

<head>
    <title>Listado de Estudiantes</title>
</head>

<body>
    <h1>Listado de Estudiantes</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>contrasena</th>
        </tr>
        <?php


        foreach ($est as $key) {
            echo "\t<tr>\n";
            printf("\t\t<td> %s </td>\n", $key['nombre']);
            printf("\t\t<td> %s </td>\n", $key['contrasena']);
            echo "\t</tr>\n";
        }


        ?>
    </table>
</body>

</html>