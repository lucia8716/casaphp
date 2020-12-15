<?php
copy($_FILES['foto']['tmp_name'], $_FILES['foto']['name']);
//El fichero destino se llama igual que el fichero origen
copy($_FILES['foto']['tmp_name'], 'mario.jpg');
//el fichero dstino se llamará: imagen.jpg
echo "La foto se registro en el servidor.<br />";
//$nom=$_FILES['foto']['name'];
//echo "<img src=\"$nom\" />"; //echo "<img src='$nom'>";

echo "Tratamiento de archivos subidos al servidor.<br /> ";
echo "1. Verifica si se permiten uploads.<br /> ";

if (get_cfg_var('file_uploads') == 1) {
    echo "TRUE.<br />";
} else {
    echo "FALSE.<br />";
}

echo "2. Aquí se cargará el archivo (directiva upload_tmp_dir en php.ini).<br />  ";

echo get_cfg_var('upload_tmp_dir');
echo '<br />';

echo "3. Límite máximo del tamaño que se puede transferir al servidor.<br />  ";

echo get_cfg_var('upload_max_filesize');
echo '<br />';
echo "4. Verifica si hubo algún error en la subida del archivo>>" . $_FILES['foto']['error'];
echo '</br>';

echo "5.Éste es el contenido de la superglobal";
echo '</br>';

echo print_r($_FILES);
echo '</br>';

echo var_dump($_FILES);
echo '</br>';

echo "6. Otra verificación de la subida";
if (is_uploaded_file($_FILES['foto']['tmp_name']) == 1) {
    echo "TRUE.<br />";
} else {
    echo "FALSE.<br />";
}
