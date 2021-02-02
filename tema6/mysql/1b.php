<?php
@$connection = new mysqli('localhost', 'root', '', 'dwes');
$error = $connection->connect_errno;
// si $error es iguala null signfica que la conexion se hizo correctamente
if ($error == null) {
    $query = "CREATE TABLE stock2 SELECT * FROM stock WHERE unidades = 1";
    $consulta = $connection->query($query);
    if ($consulta) {
        echo "Se ha creado la tabla stock2 con los registros de la tabla stock1, total registros $connection->affected_rows";
        echo "<br>";
        $resultado = $connection->query('DELETE FROM stock WHERE unidades = 1');
        if ($resultado) {
            print "<p>Se han borrado $connection->affected_rows registros.</p>";
            echo "<br>";
            $insertSQL = "INSERT INTO stock SELECT * FROM stock2 WHERE unidades = 1";
            $insert = $connection->query($insertSQL);
            if ($insert) {
                echo "Se han insertado los datos en la tabla stock nuevamente , total registros $connection->affected_rows";
                echo "<br>";
                $dropSQL = "DROP TABLE stock2";
                $drop = $connection->query($dropSQL);
                if ($drop) {
                    echo "Se ha eliminado la tabla stock2, total registros $connection->affected_rows";
                } else {
                    echo $connection->connect_error;
                }
            } else {
                echo $connection->connect_error;
            }
        } else {
            echo $connection->connect_error;
        }
    } else {
        echo $connection->connect_error;
    }
    $connection->close();
} else {
    echo $connection->connect_error;
}
