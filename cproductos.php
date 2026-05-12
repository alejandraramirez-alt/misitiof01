<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgfares/favicon.png" type="image/png" sizes="16*16">
    <link rel="stylesheet" href="EstilosCssF/diseñocssf.css">
    <link rel="stylesheet" href="EstilosCssF/dcolores.css">
    <script src="./JScript/acciones_script.js"></script>
    <title>Inventario-fares</title>
</head>

<body>
    <header id="titulo1" class="fcolor-d5">
        <h1>Ediciones Fares</h1>
    </header>
    <nav class="fcolor-l4">
        <ul>
            <li><a href="#">principal</a></li>
            <li><a href="#">Libros</a></li>
            <li class="f-desplegable">
                <a href="#" class="btndesplegable">Inventario</a>
                <div class="cont-desplegable">
                    <a href="cproductos.php">Crear producto</a>
                    <a href="#">Consultar producto</a>
                </div>
            </li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>
    <section class="fcolor-l1 seccion-form">
    <div class="s-encabezado">
        <h2>Inventario</h2>
    </div>
<form class="fcolor-l5" action="guardar.php" method="post" enctype="multipart/form-data" autocomplete="off">
    <div id="codnom">
        <label class="codnom1">Codigo: <input type="number" name="codigo"> </label>
        <label class="codnom1">Producto: <input type="text" class="campof" name="nom_producto" id="nom_producto"
        pattern="[A-Za-z\s]{3,100}" placeholder="Ingresar solo letras" size="50"
        autofocus required> </label>
</div>
<div id="cospor">
    <label class="codnom1">Costo: <input type="text" class="campof" name="costo" id="costo"
    pattern="[0-9]+([,\.][0-9]+)?"> </label>
    <label>Porcentaje de venta: <input type="text" class="campof" name="porc_venta" id="porc_venta"
    maxlength="3" size="4"> </label>
</div>
<div>
    <label>Precio de venta:<input type="text" name="precio_venta" id="precio_venta" readonly> </label>
    <label>Fecha: <input type="date" name="fecha" id="fecha"> </label>
</div>
<div>
    <img src="" width="200px" alt="Imagen del producto...">
</div>
<div>
    <input type="file" name="imagen" id="imagen">
</div>
<input type="submit" value="Guardar">
</form>
<footer class="fcolor-d5">
    <p>Derechos Reservados &copy; 2004-2023</p>
</footer>
</body>
</html>

<script>
function calcularPrecio(){
    let costo = parseFloat(document.getElementById("costo").value) || 0;
    let porc = parseFloat(document.getElementById("porc_venta").value) || 0;

    let precio = costo + (costo * porc / 100);

    document.getElementById("precio_venta").value = precio.toFixed(2);
}

document.getElementById("costo").addEventListener("keyup", calcularPrecio);
document.getElementById("porc_venta").addEventListener("keyup", calcularPrecio);
</script>
<script>
document.getElementById("imagen").addEventListener("change", function(event){
    let reader = new FileReader();
    reader.onload = function(){
        document.querySelector("img").src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
});
</script>