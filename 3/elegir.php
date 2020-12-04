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

                $n1 = rand(1, 10);
                $n2 = rand(1, 10);
                $n3 = rand(1, 10);
                $n4 = rand(1, 10);

                echo '<form method="POST" action="">

<h1>Introduce cuantro digitos</h1></br></br></br>';

                for ($i = 0; $i < 4; $i++) {

                        echo "<input type='number' name='n[]' value='$n[$i]'>&nbsp;&nbsp;";
                        echo "<input type='hidden' name='d[]' value='d[$i]'>&nbsp";
                }
                echo '<input type="submit" name="enviar">';

                echo "<input type='hidden' name='d1' value='d[0]'>&nbsp;
                <input type='hidden' name='d2' value='d[1]'>&nbsp;
                <input type='hidden' name='d3' value='d[2]'>&nbsp;
                <input type='hidden' name='d4' value='d[]'>&nbsp;";
                echo '</form></br></br></br>';






                echo "la solucion al ejercicio es " . $n1 . $n2 . $n3 . $n4;
        } else {

                $numero1 = $_POST['n1'];
                $numero2 = $_POST['n2'];
                $numero3 = $_POST['n3'];
                $numero4 = $_POST['n4'];

                $numero5 = $_POST['d1'];
                $numero6 = $_POST['d2'];
                $numero7 = $_POST['d3'];
                $numero8 = $_POST['d4'];



                echo "<form method='POST' action=''>;

<h1>Comprobar</h1></br></br></br>
<input type='number' name='n1' value='$numero1'>";
                echo "&nbsp;&nbsp;<input type='number' name='n2' value='$numero2'>;
&nbsp;&nbsp;";
                echo "&nbsp;&nbsp;<input type='number' name='n2' value='$numero3'>;
&nbsp;&nbsp;";
                echo "&nbsp;&nbsp;<input type='number' name='n2' value='$numero4'>;
&nbsp;&nbsp;</br></br></br>";

                echo "la solucion al ejercicio es " . $numero5 . $numero6 . $numero7 . $numero8;
        }






        ?>



</body>

</html>