<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<?php
if (isset($_POST['enviar'])){
$n = $_POST['num'];
$n2 = $_POST['num2'];
$op = $_POST['op'];
 switch($op){
	 case 1: echo "La suma de $n + $n2= ". ($n+$n2);break;
	 case 2: echo "La resta de $n - $n2= ". ($n-$n2);break;
	 case 3: echo "La suma de $n X $n2= ". $n*$n2;break;
	 case 4: echo "La suma de $n / $n2= ". $n/$n2;break;
	 }
 }else
 {
	 ?>
    <form action="ejer331b.php" method="post">
        Introduzca un numero: <input type="text" name="num" />
        <br /> Introduzca otro numero: <input type="text" name="num2" />
        <br />Seleccione operacion: 
        <select name="op">
           <option value="1" selected="selected">Sumar</option>
           <option value="2">Restar</option>
           <option value="3">Multiplicar</option>
           <option value="4">Dividir</option>
 		</select>
    	<br /> <input type="submit" name="enviar" value="Enviar"/>
    </form>
    
<?php
}
?>
</body>
</html>