<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8" />
    <title>Calculadora</title>
</head>

<body>
    <?php
    require("C:/wamp64/www/3/f2.php");
    $pri = $_POST['primera'];
    $seg = $_POST['segunda'];
    $op = $_POST['operador'];
    echo "<h1> Calculadora</h1>";
    echo "<h3>n1: $pri &nbsp n2: $seg <br> operacion: $op</h3>";
    echo "<br>resultado: ";
    switch ($op) {
        case "+":
            echo sumar($pri, $seg);
            break;
        case "-":
            echo restar($pri, $seg);
            break;
        case "*":
            echo multiplicar($pri, $seg);
            break;
        case "/":
            echo dividir($pri, $seg);
            break;
    }
    ?>
</body>

</html>