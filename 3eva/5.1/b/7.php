<?php 

function conectar(){
    $conexion=mysqli_connect("localhost","root","", "bbdd_farmacia"); 

    return $conexion;
}

function desconectar($conexion){

mysqli_close($conexion);

}
