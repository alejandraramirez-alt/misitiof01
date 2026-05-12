window.addEventListener("load", iniciarf);

function iniciarf() {
    vcosto = document.getElementById("costop");
    vporcentaje = document.getElementById("porcentajev");
    vimage = document.getElementById("simage");

    vcosto.addEventListener("input", mostrarpventa);
    vporcentaje.addEventListener("input", mostrarpventa);
    vimage.addEventListener("change", mostrarImagen);
}

function calcularPorcentaje(costof, porcentajef) {
    let TantoTotal = costof * (porcentajef / 100);
    let PVenta = parseFloat(costof) + parseFloat(TantoTotal);
    return PVenta;
}

function mostrarpventa() {
    if (vcosto.value != "" && vporcentaje.value != "") {
        let calculo = calcularPorcentaje(vcosto.value, vporcentaje.value);
        document.getElementById("PVenta").value = calculo;
    } else {
        document.getElementById("PVenta").value = "";
    }
}

function mostrarImagen() {
    var verimagen = document.querySelector("img");
    var archivof = document.querySelector('input[type="file"]').files[0];

    var leerarchivo = new FileReader();

    leerarchivo.onloadend = function () {
        verimagen.src = leerarchivo.result;
    };

    if (archivof) {
        leerarchivo.readAsDataURL(archivof);
    } else {
        verimagen.src = "";
    }
}
