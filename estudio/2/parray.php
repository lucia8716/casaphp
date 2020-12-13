<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $pizzas = ['jamonyqueso', 'napolitana', 'mozarella'];
    $cantidad = [];

    echo '<form method="$_POST" action="parray3.php">
Nombre:
<input type="text" name="nombre" size="30">
<br>

Direccion;
<input type="text" name="direccion" size="40">
<br>';


    for ($i = 0; $i < 3; $i++) {

        echo $pizzas[$i];
        echo "<input type='checkbox' name='pizzas[]' value=$pizzas[$i]>";

        echo "<input type='number' name='cantidad[]' size='30'> <br>";

        # code...
    }
    echo '<input type="submit" value="Confirmar">

</form>';



    ?>



</body>

</html>