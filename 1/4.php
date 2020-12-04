


<?php


if (!$_POST) {



    echo '<form method="POST" action="">

introduce un numero<input name="numero1"></br>
introduce un numero<input name="numero2"></br>
<select name="operador" id=""></br>
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
<input type="submit" name="enviar">

</form>';
    # code...
} else {
    # code...
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $ope = $_POST['operador'];

    echo $num1 . $ope . $num2;
}





?>