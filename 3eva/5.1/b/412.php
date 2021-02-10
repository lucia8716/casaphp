<h1>Listado de Estudiantes</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Telefono</th>
    </tr>
    <?php foreach ($est as $estu) { ?>
        <tr>
            <td><?php echo $estu['nombre'] ?></td>
            <td><?php echo $estu['telefono'] ?></td>
        </tr>
    <?php } ?>

</table>

logica.php
<?php
$titulo = 'Listado de Estudiantes';
$contenido = 'miplantilla.php';
?>
layout.php
<html>

<head>
    <title><?php echo $titulo ?></title>
</head>

<body>
    <?php include($contenido) ?>
</body>

</html>