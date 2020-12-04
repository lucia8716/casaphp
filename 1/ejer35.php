<html>
<body>
 <?php
 $var1=1;
 $cont=0;
 while($var1<100){


	if ($cont<10) {
		echo "$var1 ";
		$cont++;
		}

	if ($cont>9) {
		
		echo "<br>";

		$cont=0;
	}
	$var1++;
 }
 echo "$var1";
 ?>
</body>
</html>