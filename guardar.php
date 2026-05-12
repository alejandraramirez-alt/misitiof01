<?php

$conexion = mysqli_connect("localhost", "root", "", "producto_fares");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$codigo = $_POST['codigo'];
$producto = $_POST['nom_producto'];
$costo = $_POST['costo'];
$porcentaje = $_POST['porc_venta'];
$precio = $_POST['precio_venta'];
$fecha = $_POST['fecha'];

$sql = "INSERT INTO productos (codigo, nombre, costo, porcentaje, precio_venta, fecha)
VALUES ('$codigo', '$producto', '$costo', '$porcentaje', '$precio', '$fecha')";

if (mysqli_query($conexion, $sql)) {
    echo "Producto guardado correctamente";
} else {
    echo "Error: " . mysqli_error($conexion);
}

mysqli_close($conexion);

?>