<?php
session_start();


if (isset($_SESSION['email'])) {

    echo 'Birnvenido';
    echo $_SESSION['email'];
} else {

    echo 'acceso restrigido';
}
