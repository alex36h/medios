function cargarOptionUsuarios() {

    $.ajax({
        type: "POST",
        url: "util/accesos/optionUsuarios.php",
        //data: {},
        dataType: 'json',
        beforeSend: function() {
            $("#usuarios").empty();
        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {
            switch (respuesta.estado) {
                case 1:

                    //console.log(respuesta);
                    var opciones = respuesta.data;

                    if (opciones.length > 0) {
                        var opcSelect = '';

                        for (var f = 0; f < opciones.length; f++) {
                            opcSelect += '<option ';
                            opcSelect += ' data-nombre="' + opciones[f]['nombre'] + '" ';
                            opcSelect += ' value="' + opciones[f]['usuario'] + '" >';
                            opcSelect += opciones[f]['usuario'] + ' - ' + opciones[f]['nombre'];
                            opcSelect += '</option>';
                        }

                        $("#usuarios").html(opcSelect);
                        $("#usuarios").trigger("chosen:updated");
                    }


                    break;
                case 2:
                    $('#myModalWarningBody').html(respuesta.mensaje);
                    $('#myModalWarning').modal('show');
                    break;
                default:
                    alert("Se ha producido un error");
                    break;
            }
        }
    });

}


$(document).ready(function() {

    cargarOptionUsuarios();
    $("#usuarios").chosen({ width: "100%" });

});