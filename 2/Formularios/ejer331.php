<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<?php
$n = $_POST['num'];
$n2 = $_POST['num2'];
$op = $_POST['op'];
 switch($op){
	 case 1: echo "La suma de $n + $n2= ". ($n+$n2);break;
	 case 2: echo "La resta de $n - $n2= ". ($n-$n2);break;
	 case 3: echo "La suma de $n X $n2= ". $n*$n2;break;
	 case 4: echo "La suma de $n / $n2= ". $n/$n2;break;
 }
?>
</body>
</html>