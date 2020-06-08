function consultarDatosRel() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "POST",
        url: "util/app/query.php",
        data: {
            municipio: municipio,
            cuadrante: cuadrante,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function(){},
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


            var mydata = respuesta.data;

            var html = '';
            var i;
            console.log(mydata);
            html += '<thead>';
            html += '<tr>';

            html += '<th>Denominación</th>';
            html += '<th>Cuadrante</th>';

            html += '</tr>';
            html += '</thead>';


            for (i = 0; i < mydata.length; i++) {
                html += '<tr>' +
                    '<td>' + mydata[i].religion + '</td>' +
                    '<td>' + mydata[i].porcentaje + '%' + '</td>' +
                    '</tr>';
            }

            $("#tablaReligion").html(html);

        },
        complete: function() {

        }
    });
}

function consultarDatosLicMun() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "POST",
        url: "util/app/query1.php",
        data: {
            municipio: municipio,
            cuadrante: cuadrante,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function(){},
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {



            var mydata = respuesta.data;

            var html = '';
            var i;

            html += ' <thead>';
            html += '<tr>';

            html += '<th>Licencia</th>';
            html += '<th>Porcentaje</th>';

            html += '</tr>';
            html += '</thead>';

            for (i = 0; i < mydata.length; i++) {
                html += '<tr>' +
                    '<td>' + mydata[i].licencia + '</td>' +
                    '<td>' + mydata[i].porcentaje + '</td>' +
                    '</tr>';
            }
            $("#tablaLicencia").html(html);
        },
        complete: function() {

        }
    });


}




function consultarDatosServiciosNac() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "POST",
        url: "util/app/servnac.php",
        data: {
            municipio: municipio,
            cuadrante: cuadrante,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function(){},
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {



            var mydata = respuesta.data;

            var html = '';
            var i;

            html += ' <thead>';
            html += '<tr>';

            html += '<th></th>';
            html += '<th>Satisfecho</th>';
            html += '<th>Ni satisfecho ni insatisfecho</th>';
            html += '<th>Insatisfecho</th>';


            html += '</tr>';
            html += '</thead>';

            for (i = 0; i < mydata.length; i++) {
                html += '<tr>' +
                    '<td>' + mydata[i].servicio + '</td>' +
                    '<td>' + mydata[i].satisfecho + '</td>' +
                    '<td>' + mydata[i].nisat_ninsat + '</td>' +
                    '<td>' + mydata[i].insatisfecho + '</td>' +
                    '</tr>';
            }
            $("#tablaSatisfaccionServ").html(html);
        },
        complete: function() {

        }
    });


}

function mostrarMapa() {

}




$(document).ready(function() {




    $("#formConsulta").submit(function() {

        consultarDatosRel();
        consultarDatosLicMun();
        consultarDatosServiciosNac();


        return false;

    });


});