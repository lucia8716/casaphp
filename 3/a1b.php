<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $n = ['lunes' => 1, 'martes' => 2, 'miercoles' => 3, 'jueves' => 4];




    foreach ($n as $item => $value) {
        echo "el día " . $item . "ha tenido " . $value . "  visitas";
        echo  $value;
        echo "<br />";
    }


    ?>
</body>

</html>