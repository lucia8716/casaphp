<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<?php
$n1=1;
$n = $_POST['num'];
	echo "La tabla de multiplicar del $n <br>";
 while($n1<11){
	echo "$n X $n1= " . $n*$n1;
	echo "<br>";
	$n1++;
 }
?>
</body>
</html>