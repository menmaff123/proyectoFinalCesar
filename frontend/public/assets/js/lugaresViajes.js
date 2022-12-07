function cambiaValores(lugar, viaje, notas, id) {
    document.forms['formCompra'].action = '/compra/' + id;
    $("#btnCompra").text("Actualizar");
    $("#SelectLugar").val(lugar);
    $("#SelectViaje").val(viaje);
    $("#Notas").val(notas);
}
