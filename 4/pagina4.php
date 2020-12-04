Para leer el archivo anteriormente creado y visualizar su contenido:
<?php
header('Content-Type: text/html; charset=UTF-8');
$fp = fopen('datos.txt', 'r') or die('ERROR: No ha sido posible abrir el archivo. Revisa su nombre y sus permisos.');



while (!feof($fp)) { // loop hasta que se llegue al final del archivo
    $line = fgets($fp); // guardamos toda la línea en $line como un string. Leemos el primer registro del fichero
    $field[] = explode('|', $line); // dividimos $line en sus celdas, separadas por el caracter |  e incorporamos la línea a la matriz $field

}
fclose($fp);
// generamos la salida HTML 

foreach ($field as $infor) { //$field es un array bidimensional
    echo ' 
  <div>Nombre: ' . $infor[0] . '</div>

  <div>Email: ' . $infor[1] . '</div> 
  <div>**************************************</div>';
}
?>