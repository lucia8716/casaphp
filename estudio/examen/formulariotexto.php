<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php


    $pizzas = ['jamonyqueso', 'mozarrella', 'piña'];
    $cantidad = [];
    echo ' <form method="POST" action="pizzasarr.php">
        NOMBRE <input type="text" name="nombre"><br>
        telefono <input type="number" name="telefono"><br>';

    for ($i = 0; $i < 3; $i++) {

        echo $pizzas[$i];
        echo "<input type='checkbox' name='pizzas[]' value='$pizzas[$i]'><br>";
        echo "Cantidad";
        echo "<input type='number' name='cantidad[]'><br>";
    }

    echo ' <input type="submit"><br>
    </form>'

    ?>


</body>

</html>