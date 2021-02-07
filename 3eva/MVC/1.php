<?php
$conexion = mysqli_connect("localhost", "root", "", "bbdd_parking");
$resultado = mysqli_query($conexion, 'SELECT nombre, contrasena FROM usuarios');
?>
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
        while ($fila = mysqli_fetch_array($resultado)) {
            echo "\t<tr>\n";
            printf("\t\t<td> %s </td>\n", $fila['nombre']);
            printf("\t\t<td> %s </td>\n", $fila['contrasena']);
            echo "\t</tr>\n";
        }
        ?>
    </table>
</body>

</html>
<?php
// Cerrar la conexion
mysqli_close($conexion);
?>