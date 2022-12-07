$(document).ready(function () {
    tabla2()
}
);

function cambiaValores(nombre, imagen, id) {
    document.forms['formAddViaje'].action = '/viajes/' + id;
    $("#btnAcUp").text("Actualizar");
    $("#Nombre").val(nombre);
    $("#image").val(imagen);
}

function vaciarTabla() {
    $("#Nombre").val('');
    $("#image").val('');


}

function tabla2() {
    lista = ['Nombre', 'image'];
    for (let i = 0; i < lista.length; i++) {
        $("#formAddViaje").append(
            '<div class="form-group"><input type="text" class="form-control" id="' + lista[i] + '" name="' + lista[i] + '" placeholder="' + lista[i] + ' viaje"></div>'
        );
    }
    $("#formAddViaje").append(
        '<button id="btnAcUp" type="submit" class="btn btn-primary btn-block">Agregar</button>'
    );
}
