function mostrarDatos() {

    $.ajax({
        //async: true,
        type: "POST",
        url: "util/inicio/query.php",
        //data: {},
        dataType: 'json',
        beforeSend: function() {
            $("#cntTabla").hide();
            $("#cargando").html()


        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {
            switch (respuesta.estado) {
                case 1:



                    break;
                case 2:
                    $('#myModalWarningBody').html(respuesta.mensaje);
                    $('#myModalWarning').modal('show');
                    break;
                default:
                    alert("Se ha producido un error");
                    break;
            }
        },
        //complete: function(){}
    });


}


$(document).ready(function() {






});