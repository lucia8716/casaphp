<HTML>

<HEAD></HEAD>

<BODY>
    <?php
    // riesgo de seguridad por mala codificación

    if (isset($_GET['tema'])) {

        $tema =  $_GET['tema'];
        $var = file($tema);
        // muestra el contenido del archivo


        // Pero es uno de los archivos que
        // realmente queremos mostrar?
        // no lo sabemos

        foreach ($var as $a) {
            print $a . "<BR>";
        }
    }
    ?>

    <HR>
    <FORM METHOD='GET'>Elegir una letra de una canción
        <SELECT NAME="tema">
            <OPTION VALUE="imagine.html">Imagine
            <OPTION VALUE="help.html">Help!
            <OPTION VALUE="Allmyloving.html">All my loving
            <OPTION VALUE="lovemedo.html">Love me do
            <OPTION VALUE="pennylane.html">Penny lane
        </SELECT>
        <INPUT TYPE="SUBMIT" VALUE="Ver letra">
    </FORM>
</BODY>

</HTML>