<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Document</title>
</head>
<body>
	<?php
if(isset($_POST['submit'])){
	
$n1=1;
$n2;
$n3=1;
$n = $_POST['num'];

echo "La tabla de multiplicar del $n <br>";

echo '<form action="" method="post">';

 while($n1<11){
	echo "$n X $n1= "; echo "<input type='text' name='$n3'/>";
	echo "<br>";
	$n1++;
	$n3++;
	
 }

echo "<input type='hidden' name='num' value='$n' />";
echo '<input type="submit" name="comprobar" value="comprobar"/>';

echo "</form>";

}elseif (isset($_POST['comprobar'])) {


$n1=1;
$valorfijo=$_POST['num'];


echo "La tabla de multiplicar del $valorfijo <br>";
 while($n1<11){
	echo "$valorfijo X $n1= " . $valorfijo*$n1;  if ($valorfijo*$n1==$_POST["$n1"]) {
		echo "&nbsp"; echo "correcto";
		
	} else {
		echo "&nbsp"; echo "incorrecto";
	}
	
	echo "<br>";
	$n1++;
 }





//echo $n5;
//echo "<br>";
//echo $valorfijo;




}
?>
</body>
</html>