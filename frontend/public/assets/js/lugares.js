
$(document).ready(function () {
    tabla()
}

);

function cambiaValores(nombre, imagen, latitud, longitud, poblacion, id) {
    document.forms['formAdd'].action = '/lugares/' + id;
    $("#btnAcUp").text("Actualizar");
    $("#Nombre").val(nombre);
    $("#image").val(imagen);
    $("#Latitud").val(latitud);
    $("#Longitud").val(longitud);
    $("#id_poblacion").val(poblacion);
}

function vaciarTabla() {
    $("#Nombre").val('');
    $("#image").val('');
    $("#Latitud").val('');
    $("#Longitud").val('');
    $("#id_poblacion").val('');
}

function tabla(texto) {
    lista = ['Nombre', 'image', 'Latitud', 'Longitud', 'id_poblacion'];
    for (let i = 0; i < lista.length; i++) {
        $("#formAdd").append(
            '<div class="form-group"><input type="text" class="form-control" id="' + lista[i] + '" name="' + lista[i] + '" placeholder="' + lista[i] + ' lugar"></div>'
        );
    }
    $("#formAdd").append(
        '<button id="btnAcUp" type="submit" class="btn btn-primary btn-block">Agregar</button>'
    );
}
