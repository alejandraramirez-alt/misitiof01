<?php
$conexion = mysqli_connect("localhost","root","","producto-fares");

if(!$conexion){
    die("Error de conexión: ".mysqli_connect_error());
}
?>