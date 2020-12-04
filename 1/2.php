<?php

require("3.php");



if ($_POST) {

    $n1 = $_POST['primera'];
    $n2 = $_POST['segunda'];
    $op = $_POST['operador'];


    echo "n1= " . $n1 . "</br>";
    echo "n2= " . $n2 . "</br>";

    echo "</br>" . "</br>";

    echo $n1 . " " . $op . " " . $n2 . " = ";

    switch ($op) {
        case '+':
            echo sumar($n1, $n2);

            break;

        case '-':
            echo restar($n1, $n2);

            break;

        case '*':
            echo multiplicar($n1, $n2);

            break;

        case '/':
            echo dividir($n1, $n2);

            break;
    }
}
