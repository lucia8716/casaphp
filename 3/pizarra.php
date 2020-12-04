<?php




$num1 = [00, 10, 20, 30, [[400, 401], [410, 411], [420, 422]], 50];

$num1[0] = 00;
$num1[1] = 10;
$num1[2] = 20;
$num1[3] = 30;
$num1[4][0][0] = 400;
$num1[4][0][1] = 401;
$num1[4][1][0] = 410;
$num1[4][1][1] = 411;
$num1[4][2][0] = 420;
$num1[4][2][1] = 422;
$num1[5] = 50;



$num2 = (array(00, 10, 20, 30, (array(array(400, 401), array(410, 411), array(420, 422))), 50));

$pedro = "mario";

print_r($num1);

var_dump($num1);

echo is_array($num1) ? 'Array' : 'No es un array';
echo "</br>";

echo is_array($pedro) ? 'Array' : 'No es un array';
echo "</br>";





//visualizar con for


for ($i = 0; $i < sizeof($num1); $i++) {
    if ($i == 4) {
        for ($x = 0; $x < sizeof($num1[4]); $x++) {
            for ($z = 0; $z < sizeof($num1[4][0]); $z++) {

                echo $num1[$i][$x][$z];
                echo "</br>";
            }
        }
    } else {

        echo $num1[$i];
        echo "<br>";
    }
}




//con foreach

echo "<br>";
echo "<br>";
foreach ($num1 as $indi => $num) {
    if ($indi == 4) {
        foreach ($num as $nim) {
            foreach ($nim as $t) {
                echo ($t);
                echo "<br>";
            }
            echo "<br>";
        }
    } else {
        echo ($num);
    }
    echo "<br>";
}
