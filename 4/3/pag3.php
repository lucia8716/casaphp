<?php


header('Content-Type: text/html; charset=UTF-8');
print "<B>Tratamiento de archivos subidos al </B><BR><BR>";
print "<BR><B>1. Verifica si se permiten uploads.<BR></B>";
if (!get_cfg_var('file_uploads')) {
    die("Para resolver este problema, asignar On a directiva file_uploads de php.ini");
} else {
    print "TRUE<BR>";
}

echo " 2. Aquí se cargará el archivo ";

echo get_cfg_var('upload_tmp_dir') . "<br>";

echo " 3. Límite máximo del tamaño que se puede transferir al servidor ";

echo get_cfg_var('upload_max_filesize') . "<br>";

echo " 4. Verifica si hubo algún error en la subida del archivo >> ";

echo  $_FILES['foto']['error'] . "<br>";

echo ' 5. Éste es el contenido de la superglobal $_FILES ';
print_r($_FILES) . "<br>";;

echo ' 6. Éste es el contenido de la superglobal $_FILES ';
var_dump($_FILES) . "<br>";


echo ' Otra verificación de la subida' . "<br>";

if (!move_uploaded_file($_FILES['foto']['tmp_name'], 'perro.jpg')) {
    die("no se ha subido correctameente");
} else {
    print "OK<BR>";
}
