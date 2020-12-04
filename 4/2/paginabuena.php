<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $pizzas = ["Jamon y queso", "Napolitana", "Mozarella"];
    $cantidad = [];

    echo '<form method="POST" action="pagina2.php">

Nombre:
<input type="text" name="nombre" size="30">
<br>

Direccion;
<input type="text" name="direccion" size="40">
<br>';

    for ($x = 0; $x < 3; $x++) {


        echo $pizzas[$x];

        echo "<input type='checkbox' name='pizzas[]' value=$pizzas[$x]>";

        echo "<input type='number' name='cantidad[]' size='30'> <br>";
    }

    echo '<input type="submit" value="Confirmar">

    
    </form>';


    ?>


</body>

</html>