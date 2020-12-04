<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 3 : Características del Lenguaje PHP -->
<!-- Ejemplo: Procesar datos post -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Desarrollo Web</title>
</head>

<body>
    <?php



    if (!$_POST || $_POST['nombre'] == "" || !isset($_POST['modulos'])) {
        echo '<form name="input" action="" method="POST">
    Nombre del alumno: <input type="text" name="nombre"';

        if ($_POST && ($_POST['nombre'] != "")) {
            $aux = $_POST['nombre'];
            echo 'value="' . $aux . '"/>';
        }

        if ($_POST && ($_POST['nombre'] == "")) {
            echo "<span style ='color:red'>;------------Debe introducir un nombre</span>";
        }

        echo '<p>Módulos que cursa:</p>';

        if ($_POST && !isset($_POST['modulos'])) {
            echo '<input type="checkbox" name="modulos[]" value="DWES" /> Desarrollo web en entorno
            servidor';
            echo "<span style ='color:red'>;------------Debe introducir al menos un una opcion</span>";
            echo '<br /><input type="checkbox" name="modulos[]" value="DWEC" /> Desarrollo web en entorno
        cliente<br />
        <br />
        <input type="submit" value="Enviar" />
        </form>';
        }
    }
    $verficar;

    foreach ($_POST['modulos'] as $selected) {
        $verficar = $selected;
    }


    if ($_POST && isset($_POST['modulos']) && $verficar == "DWES") {
        echo '<input type="checkbox" name="modulos[]" value="DWES" checked/> Desarrollo web en entorno
            servidor';
        echo '<br /><input type="checkbox" name="modulos[]" value="DWEC" /> Desarrollo web en entorno
        cliente<br />
        <br />
        <input type="submit" value="Enviar" />
        </form>';
    }

    if ($_POST && isset($_POST['modulos']) && $verficar == "DWEC") {
        echo '<input type="checkbox" name="modulos[]" value="DWES"/> Desarrollo web en entorno
            servidor';
        echo '<br /><input type="checkbox" name="modulos[]" value="DWEC" checked/> Desarrollo web en entorno
        cliente<br />
        <br />
        <input type="submit" value="Enviar" />
        </form>';
    }



    ?>



</body>

</html>