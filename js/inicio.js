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
        beforeSend: function() {
            $("#myTabContent").hide();
            $("#cargando").html('<img src="img/system/loading.gif" height="70" width="70">');

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

            $("#cargando").html('');
            $("#myTabContent").show();

            var mydata = respuesta.data;

            var html = '';
            var i;

            html += '<thead>';
            html += '<tr>';

            html += '<th>Calidad Religiosa</th>';
            html += '<th>Porecentaje</th>';

            html += '</tr>';
            html += '</thead>';


            for (i = 0; i < mydata.length; i++) {

                var porcentaje = mydata[i].porcentaje * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].religion + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
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
        url: "util/app/lcm.php",
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
                // '<td>' + porcentaje.toPrecision(4) + '%' + '</td>' +
                var porcentaje = mydata[i].porcentaje * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].licencia + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
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
            html += '<th>Ns/Nr</th>';


            html += '</tr>';
            html += '</thead>';

            for (i = 0; i < mydata.length; i++) {

                var satisfecho = mydata[i].satisfecho * 100;
                var nisat_ninsat = mydata[i].nisat_ninsat * 100;
                var insatisfecho = mydata[i].insatisfecho * 100;
                var nsnr = mydata[i].nsnr * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].servicio + '</td>' +
                    '<td>' + satisfecho.toFixed(1) + '%' + '</td>' +
                    '<td>' + nisat_ninsat.toFixed(1) + '%' + '</td>' +
                    '<td>' + insatisfecho.toFixed(1) + '%' + '</td>' +
                    '<td>' + nsnr.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaSatisfaccionServ").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatosAfReligiosa() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "POST",
        url: "util/app/afreligiosa.php",
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

            html += '<thead>';
            html += '<tr>';

            html += '<th>Afiliación</th>';
            html += '<th>Porcentaje</th>';

            html += '</tr>';
            html += '</thead>';


            for (i = 0; i < mydata.length; i++) {

                var porcentaje = mydata[i].porcentaje * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].religion + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }

            $("#tablaAfReligiosa").html(html);


        },
        complete: function() {

        }
    });
}

function consultarDatosCReligiosa() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "POST",
        url: "util/app/creligiosa.php",
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

            html += '<thead>';
            html += '<tr>';

            html += '<th>Categoría</th>';
            html += '<th>Católica</th>';
            html += '<th>Evangelica</th>';
            html += '<th>Otros Mormon, testigos de jehova,etc</th>';


            html += '</tr>';
            html += '</thead>';


            for (i = 0; i < mydata.length; i++) {

                var catolica = mydata[i].catolica * 100;
                var evangelica = mydata[i].evangelica * 100;
                var otros = mydata[i].otros * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].categoria + '</td>' +
                    '<td>' + catolica.toFixed(1) + '%' + '</td>' +
                    '<td>' + evangelica.toFixed(1) + '%' + '</td>' +
                    '<td>' + otros.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }

            $("#tablaCReligion").html(html);



        },
        complete: function() {

        }
    });
}



function consultarDatosLicMun2() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "POST",
        url: "util/app/lcm2.php",
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
                // '<td>' + porcentaje.toPrecision(4) + '%' + '</td>' +
                var porcentaje = mydata[i].porcentaje * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].licencia + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaLicencia2").html(html);


        },
        complete: function() {

        }
    });


}


function consultarDatosServiciosMun() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "POST",
        url: "util/app/servmun.php",
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
            html += '<th>Ns/Nr</th>';


            html += '</tr>';
            html += '</thead>';

            for (i = 0; i < mydata.length; i++) {

                var satisfecho = mydata[i].satisfecho * 100;
                var nisat_ninsat = mydata[i].nisat_ninsat * 100;
                var insatisfecho = mydata[i].insatisfecho * 100;
                var nsnr = mydata[i].nsnr * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].servicio + '</td>' +
                    '<td>' + satisfecho.toFixed(1) + '%' + '</td>' +
                    '<td>' + nisat_ninsat.toFixed(1) + '%' + '</td>' +
                    '<td>' + insatisfecho.toFixed(1) + '%' + '</td>' +
                    '<td>' + nsnr.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaServMun").html(html);
        },
        complete: function() {

        }
    });


}


$(document).ready(function() {




    $("#formConsulta").submit(function() {

        consultarDatosRel();
        consultarDatosLicMun();
        consultarDatosServiciosNac();
        consultarDatosAfReligiosa();
        consultarDatosCReligiosa();
        consultarDatosLicMun2();
        consultarDatosServiciosMun();


        return false;

    });


});