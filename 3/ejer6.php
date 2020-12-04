<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    function formulario()
    {
        echo '<form method="POST" action="ejer5.php">
    Introduce numero que euros a convertir <input type="text" name="num1" > 
    <br />
    <input type="submit" name="calcular" value="calcular"/>
    </form>';
    }


    function calcular()
    {

        if (isset($_POST['calcular'])) {

            $numero1 = $_POST['num1'];
        }




        function uno($numero1)
        {

            if (isset($_POST['calcular'])) {

                $numero1 = $_POST['num1'];

                return  str_replace(" ", "-", $numero1);
            }
        }

        function dos()
        {

            $numero2 = uno();

            echo $numero2;
        }

        uno();
        dos();
    }


    if (!isset($_POST['calcular'])) {
        formulario();
    } else {
        calcular();
    }


    ?>

</body>

</html>