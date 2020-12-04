<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    if (!$_POST) {

        echo '<form method="$_POST" action="">
    Codigo de tren <input type="number"><br>
    Codigo de recorrido <input type="date"><br>
    </form>';
    }
    ?>
</body>

</html>