<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<?php
$nom = $_GET['nombre'];
$ape = $_GET['apellidos'];
$dir = $_GET['direccion'];
$pob = $_GET['poblacion'];
$pro = $_GET['provincia'];

print "$nom  <br>";
print "$ape  <br>";
print "$dir  <br>";
print "$pob  <br>";
print "$pro <br>";
?>
</body>
</html>