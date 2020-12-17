<?php


echo $_FILES['fichero']['name'];

if ($_FILES['fichero']['name'] == 'fichero.txt') {

    copy($_FILES['fichero']['tmp_name'], $_FILES['fichero']['name']);
    copy($_FILES['fichero']['tmp_name'], 'fichero.txt');
}

copy($_FILES['documento']['tmp_name'], $_FILES['documento']['name']);
copy($_FILES['documento']['tmp_name'], 'texto.docx');


if ($_FILES['fichero']['name'] == 'fichero.txt' && $_FILES['documento']['name'] == 'documento.docx') {

    echo "se ha subido correctamente";
}

if ($_FILES['fichero']['name'] != 'fichero.txt' && $_FILES['documento']['name'] == 'documento.docx') {

    echo "el fichero.txt no es correcto. Se subio solo el documkento.docx";
}
