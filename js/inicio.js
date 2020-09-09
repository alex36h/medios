function consultarDatosRel() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/query.php",
        data: {
            municipio: municipio,
            cuadrante: cuadrante,
            corrida: corrida

        },
        dataType: 'json',
        /*beforeSend: function() {
            $("#myTabContent").hide();
            $("#myTab").hide();
            $("#cargando").html('<img src="img/system/loading.gif" height="70" width="70">');


        },*/
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {


            /*
            $("#cargando").html('');
            $("#myTabContent").show();
            $("#myTab").show();*/


            var mydata = respuesta.data;

            var html = '';
            var i;

            html += '<thead class="customtable text-white" class="customtable text-white">';
            html += '<tr >';

            html += '<th>Calidad Religiosa</th>';
            html += '<th>Porecentaje</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';


            for (i = 0; i < mydata.length; i++) {

                var porcentaje = mydata[i].porcentaje * 100;

                html += '<tr >' +
                    '<td>' + mydata[i].religion + '</td>' +
                    '<td >' + porcentaje.toFixed(1) + '%' + '</td>' +
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
        type: "GET",
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

            html += ' <thead class="customtable text-white" class="customtable text-white">';
            html += '<tr>';

            html += '<th>Licencia  Categoría</th>';
            html += '<th>Porcentaje</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';

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

function consultarDatosLicMun2() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
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

            html += ' <thead class="customtable text-white" class="customtable text-white">';
            html += '<tr>';

            html += '<th>Licencia Sub Categoría </th>';
            html += '<th>Porcentaje</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';

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




function consultarDatosServiciosNac() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
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

            html += ' <thead class="customtable text-white" class="customtable text-white">';
            html += '<tr>';

            html += '<th></th>';
            html += '<th>Satisfecho</th>';
            html += '<th>Ni satisfecho ni insatisfecho</th>';
            html += '<th>Insatisfecho</th>';
            html += '<th>Ns/Nr</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

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
        type: "GET",
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




            var mydata = respuesta.data;

            var html = '';
            var i;

            html += '<thead class="customtable text-white" class="customtable text-white">';
            html += '<tr>';

            html += '<th>Afiliación</th>';
            html += '<th>Porcentaje</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';


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
        type: "GET",
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




            var mydata = respuesta.data;

            var html = '';
            var i;

            html += '<thead class="customtable text-white" class="customtable text-white">';
            html += '<tr>';

            html += '<th>Categoría</th>';
            html += '<th>Católica</th>';
            html += '<th>Evangelica</th>';
            html += '<th>Otros Mormon, testigos de jehova,etc</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';


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






function consultarDatosServiciosMun() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th></th>';
            html += '<th>Satisfecho</th>';
            html += '<th>Ni satisfecho ni insatisfecho</th>';
            html += '<th>Insatisfecho</th>';
            html += '<th>Ns/Nr</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

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


function consultarDatosCapGestion() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/cgestion.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>Gestión</th>';
            html += '<th>Media</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var porcentaje = mydata[i].porcentaje * 100;


                html += '<tr>' +
                    '<td>' + mydata[i].gestion + '</td>' +
                    '<td>' + porcentaje.toFixed(2) + '</td>' +
                    '</tr>';
            }
            $("#tablaCapGestion").html(html);

        },
        complete: function() {

        }
    });


}


function consultarDatosPercDesarrollo() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/pdesarrollo.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th></th>';
            html += '<th>Mejor</th>';
            html += '<th>Igual</th>';
            html += '<th>Peor</th>';
            html += '<th>Ns/Nr</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var mejor = mydata[i].mejor * 100;
                var igual = mydata[i].igual * 100;
                var peor = mydata[i].peor * 100;
                var nsnr = mydata[i].nsnr * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].percepcion + '</td>' +
                    '<td>' + mejor.toFixed(1) + '%' + '</td>' +
                    '<td>' + igual.toFixed(1) + '%' + '</td>' +
                    '<td>' + peor.toFixed(1) + '%' + '</td>' +
                    '<td>' + nsnr.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaPercDesa").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatosPercPobreza() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/ppobreza.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th></th>';
            html += '<th>Mejor</th>';
            html += '<th>Igual</th>';
            html += '<th>Peor</th>';
            html += '<th>Ns/Nr</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var mejor = mydata[i].mejor * 100;
                var igual = mydata[i].igual * 100;
                var peor = mydata[i].peor * 100;
                var nsnr = mydata[i].nsnr * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].percepcion + '</td>' +
                    '<td>' + mejor.toFixed(1) + '%' + '</td>' +
                    '<td>' + igual.toFixed(1) + '%' + '</td>' +
                    '<td>' + peor.toFixed(1) + '%' + '</td>' +
                    '<td>' + nsnr.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaPercPobr").html(html);
        },
        complete: function() {

        }
    });


}

function consultarIndVictim() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/ivictizacion.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>Ha sido victima </th>';
            html += '<th>No ha sido victima</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {
                // '<td>' + porcentaje.toPrecision(4) + '%' + '</td>' +
                var victima = mydata[i].victima * 100;
                var novictima = mydata[i].novictima * 100;

                html += '<tr>' +
                    '<td>' + victima.toFixed(1) + '%' + '</td>' +
                    '<td>' + novictima.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaIndVictim").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatosSegSector() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/segsector.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th></th>';
            html += '<th>Muy seguro/seguro</th>';
            html += '<th>Muy inseguro/inseguro</th>';
            html += '<th>Ns/nr</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var seguro = mydata[i].seguro * 100;
                var inseguro = mydata[i].inseguro * 100;
                var nsnr = mydata[i].nsnr * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].lugar + '</td>' +
                    '<td>' + seguro.toFixed(1) + '%' + '</td>' +
                    '<td>' + inseguro.toFixed(1) + '%' + '</td>' +
                    '<td>' + nsnr.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaSegSector").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatosSegDia() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/segdia.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th></th>';
            html += '<th>Muy seguro/seguro</th>';
            html += '<th>Muy inseguro/inseguro</th>';
            html += '<th>Ns/nr</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var seguro = mydata[i].seguro * 100;
                var inseguro = mydata[i].inseguro * 100;
                var nsnr = mydata[i].nsnr * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].lugar + '</td>' +
                    '<td>' + seguro.toFixed(1) + '%' + '</td>' +
                    '<td>' + inseguro.toFixed(1) + '%' + '</td>' +
                    '<td>' + nsnr.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaSegDia").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatosSegNoche() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/segnoche.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th></th>';
            html += '<th>Muy seguro/seguro</th>';
            html += '<th>Muy inseguro/inseguro</th>';
            html += '<th>Ns/nr</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var seguro = mydata[i].seguro * 100;
                var inseguro = mydata[i].inseguro * 100;
                var nsnr = mydata[i].nsnr * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].lugar + '</td>' +
                    '<td>' + seguro.toFixed(1) + '%' + '</td>' +
                    '<td>' + inseguro.toFixed(1) + '%' + '</td>' +
                    '<td>' + nsnr.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaSegNoche").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatosTrabPolicia() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/tpolicia.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>Calificaión</th>';
            html += '<th>Porcentaje</th>';




            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;


                html += '<tr>' +
                    '<td>' + mydata[i].calificacion + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaTrabPolicia").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatosProfPolicia() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/ppolicia.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>Calificación</th>';
            html += '<th>Porcentaje</th>';




            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;


                html += '<tr>' +
                    '<td>' + mydata[i].calificacion + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaProfPolicia").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatosFrecSituaciones() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/fsituaciones.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>Situación</th>';
            html += '<th>Frecuente</th>';
            html += '<th>Alguna Frecuencia</th>';
            html += '<th>Ninguna Frecuencia</th>';




            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var frecuente = mydata[i].frecuente * 100;
                var algfrec = mydata[i].algfrec * 100;
                var ningfrec = mydata[i].ningfrec * 100;



                html += '<tr>' +
                    '<td>' + mydata[i].situacion + '</td>' +
                    '<td>' + frecuente.toFixed(1) + '%' + '</td>' +
                    '<td>' + algfrec.toFixed(1) + '%' + '</td>' +
                    '<td>' + ningfrec.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaFrecSitua").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatosTransporte() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/transporte.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>Transporte</th>';
            html += '<th>Porcentaje</th>';





            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].transporte + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaTransporte").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatosProResidencia() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/proresidencia.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>Problema</th>';
            html += '<th>Porcentaje</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].problema + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaProResi").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatosProMunicipio() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/promunicipio.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>Problema</th>';
            html += '<th>Porcentaje</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].problema + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaProMunicipio").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatosPais() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/propais.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>Problema</th>';
            html += '<th>Porcentaje</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].problema + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaProPais").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatosObras() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/obras.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>Problema</th>';
            html += '<th>Porcentaje</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].obra + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaObras").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatoGMunicipio() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/gmunicipio.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>Gusta</th>';
            html += '<th>Porcentaje</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].gusta + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaGmunicipio").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatoNGMunicipio() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/ngmunicipio.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>No Gusta</th>';
            html += '<th>Porcentaje</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].gusta + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaNGmunicipio").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatoGResidencia() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/gresidencia.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>Gusta</th>';
            html += '<th>Porcentaje</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].gusta + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaGResidencia").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatoNGResidencia() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/ngresidencia.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>No Gusta</th>';
            html += '<th>Porcentaje</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].gusta + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaNGResidencia").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatoCondVida() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/condvida.php",
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

            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Agenda</th>';
            html += '<th>Porcentaje</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].agenda + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaCondVida").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatoSugDestino() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/sugdestino.php",
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

            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Agenda</th>';
            html += '<th>Porcentaje</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].agenda + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaSugDestino").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatoSSimpatia() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/simpatia.php",
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

            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Simpatía</th>';
            html += '<th>Porcentaje</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].simpatia + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaSimpatia").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatosExpectativa() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/expectativa.php",
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

            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += ' <th>Oportunidad</th>';
            html += ' <th>FSLN</th>';
            html += ' <th>Oposición</th>';
            html += ' <th>Ninguno</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {



                var fsln = mydata[i].fsln * 100;
                var oposicion = mydata[i].oposicion * 100;
                var ninguno = mydata[i].ninguno * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].expectativa + '</td>' +
                    '<td>' + fsln.toFixed(1) + '%' + '</td>' +
                    '<td>' + oposicion.toFixed(1) + '%' + '</td>' +
                    '<td>' + ninguno.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaExpectativa").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatoIntencion() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/intencion.php",
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

            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Intención</th>';
            html += '<th>Porcentaje</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].intencion + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaIntencion").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatoPisoTecho() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/piso.php",
        data: {
            municipio: municipio,
            cuadrante: cuadrante,
            corrida: corrida

        },
        dataType: 'json',
        beforeSend: function() {



        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {


            $("#cargando").html('');
            $("#myTabContent").show();
            $("#myTab").show();


            var mydata = respuesta.data;
            var html = '';
            var i;


            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>P Techo</th>';
            html += '<th>PISO Caja negra</th>';
            html += '<th>TECHO Según LCM</th>';

            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var escenario1 = mydata[i].escenario1 * 100;
                var escenario2 = mydata[i].escenario2 * 100;
                var escenario3 = mydata[i].escenario3 * 100;
                var escenario4 = mydata[i].escenario4 * 100;

                html += '<tr>' +
                    '<td>' + mydata[i].opcion + '</td>' +
                    '<td>' + escenario1.toFixed(1) + '%' + '</td>' +
                    '<td>' + escenario4.toFixed(1) + '%' + '</td>' +



                    '</tr>';
            }
            $("#tablaPiso").html(html);
        },
        complete: function() {

        }
    });


}



function consultarDatoSector() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/sector.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Sector</th>';
            html += '<th>Porcentaje</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;



                html += '<tr>' +
                    '<td>' + mydata[i].sector + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaSector").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatoSoporteH() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/soporte.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Respuesta</th>';
            html += '<th>Opción</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;



                html += '<tr>' +
                    '<td>' + mydata[i].respuesta + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaSoporteH").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatoParentescoSop() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/parentesco.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Parentesco</th>';
            html += '<th>Opción</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;



                html += '<tr>' +
                    '<td>' + mydata[i].parentesco + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaParentescoSop").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatoGenero() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/genero.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Genero</th>';
            html += '<th>Opción</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;



                html += '<tr>' +
                    '<td>' + mydata[i].genero + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaGenero").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDaGrupoGen() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/grupogeneracion.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Grupo generacional</th>';
            html += '<th>Porcentaje</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;



                html += '<tr>' +
                    '<td>' + mydata[i].perfil + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#GrupoGen").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatoEstadoCiv() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/estadocivil.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Estado Civil</th>';
            html += '<th>Porcentaje</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;



                html += '<tr>' +
                    '<td>' + mydata[i].estado + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaEstadoCiv").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatoPareja() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/pareja.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Estado</th>';
            html += '<th>Porcentaje</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;



                html += '<tr>' +
                    '<td>' + mydata[i].pareja + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaPareja").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatoNucleo() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/nucleo.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Hogar</th>';
            html += '<th>Promedio</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var promedio = mydata[i].promedio * 100;



                html += '<tr>' +
                    '<td>' + mydata[i].hogar + '</td>' +
                    '<td>' + promedio.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaNucleo").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatoEscolaridad() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/escolaridad.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Escolaridad</th>';
            html += '<th>Porcentaje</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;



                html += '<tr>' +
                    '<td>' + mydata[i].estudios + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaEscolaridad").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatoGeneraIngreso() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/ingresos.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Genera ingresos</th>';
            html += '<th>No genera ingresos</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var genera = mydata[i].genera * 100;
                var porcentaje = mydata[i].porcentaje * 100;



                html += '<tr>' +
                    '<td>' + genera.toFixed(1) + '%' + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaIngresos").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatoIngresoProv() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/ingresosprov.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Trabajo</th>';
            html += '<th>Pensión por jubilación </th>';
            html += '<th>Remesas</th>';
            html += '<th>Pensión alimenticia</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var trabajo = mydata[i].trabajo * 100;
                var pensionjub = mydata[i].pensionjub * 100;
                var remesas = mydata[i].remesas * 100;
                var pensionalim = mydata[i].pensionalim * 100;


                html += '<tr>' +
                    '<td>' + trabajo.toFixed(1) + '%' + '</td>' +
                    '<td>' + pensionjub.toFixed(1) + '%' + '</td>' +
                    '<td>' + remesas.toFixed(1) + '%' + '</td>' +
                    '<td>' + pensionalim.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#IngresoProv").html(html);
        },
        complete: function() {

        }
    });


}



function consultarDatoRazonNogenraIng() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/razonnogeneraing.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Razón</th>';
            html += '<th>Porcentaje </th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var porcentaje = mydata[i].porcentaje * 100;


                html += '<tr>' +
                    '<td>' + mydata[i].razon + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#TablaNogenraIng").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatoTrabajoRealiza() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/trabajorealiza.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Lugar</th>';
            html += '<th>Porcentaje </th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var porcentaje = mydata[i].porcentaje * 100;


                html += '<tr>' +
                    '<td>' + mydata[i].lugar + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaTrabajoRealiza").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatoTrabajoCompos() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/trabajocomposicion.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Tipo</th>';
            html += '<th>Porcentaje </th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var porcentaje = mydata[i].porcentaje * 100;


                html += '<tr>' +
                    '<td>' + mydata[i].tipo + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaTrabajocomposicion").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatoTipoIngreso() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/tipoingreso.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;




            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Ingreso</th>';
            html += '<th>Porcentaje </th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var porcentaje = mydata[i].porcentaje * 100;


                html += '<tr>' +
                    '<td>' + mydata[i].ingreso + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaTipoIngreso").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatoTrabajoSector() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/trabajosector.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Sector Público</th>';
            html += '<th>Sector Privado</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var publico = mydata[i].sectorpublico * 100;
                var privado = mydata[i].sectorprivado * 100;


                html += '<tr>' +
                    '<td>' + publico.toFixed(1) + '%' + '</td>' +
                    '<td>' + privado.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaTrabajoSector").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatoAfiliacionSeguro() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/afseguro.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Esta Afiliado</th>';
            html += '<th>No esta Afiliado</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var afiliado = mydata[i].afiliado * 100;
                var noafiliado = mydata[i].noafiliado * 100;


                html += '<tr>' +
                    '<td>' + afiliado.toFixed(1) + '%' + '</td>' +
                    '<td>' + noafiliado.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaAfiliadoSeguro").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatoDescripcionEntrevistado() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/descripcionentrev.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Descripción</th>';
            html += '<th>Porcentaje</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var porcentaje = mydata[i].porcentaje * 100;



                html += '<tr>' +
                    '<td>' + mydata[i].descripcion + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaDescripcionEntrevistado").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatoDescripcionNseAlto() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/nsealto.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>NSE Medio tipicohacia alto</th>';
            html += '<th>AB</th>';
            html += '<th>C1</th>';
            html += '<th>C2</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var nse = mydata[i].nse * 100;
                var ab = mydata[i].ab * 100;
                var c1 = mydata[i].c1 * 100;
                var c2 = mydata[i].c2 * 100;




                html += '<tr>' +
                    '<td>' + nse.toFixed(1) + '%' + '</td>' +
                    '<td>' + ab.toFixed(1) + '%' + '</td>' +
                    '<td>' + c1.toFixed(1) + '%' + '</td>' +
                    '<td>' + c2.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaNseAlto").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatoDescripcionNseMedio() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/nsemedio.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Descripción</th>';
            html += '<th>Porcentaje</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var nse = mydata[i].nse * 100;
                var d1 = mydata[i].d1 * 100;
                var d2 = mydata[i].d2 * 100;



                html += '<tr>' +

                    '<td>' + nse.toFixed(1) + '%' + '</td>' +
                    '<td>' + d1.toFixed(1) + '%' + '</td>' +
                    '<td>' + d2.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaNseMedio").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatoDescripcionNsebajo() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/nsebajo.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Descripción</th>';
            html += '<th>Porcentaje</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var nse = mydata[i].nse * 100;
                var e1 = mydata[i].e1 * 100;
                var e2 = mydata[i].e2 * 100;



                html += '<tr>' +
                    '<td>' + nse.toFixed(1) + '%' + '</td>' +
                    '<td>' + e1.toFixed(1) + '%' + '</td>' +
                    '<td>' + e2.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaNseBajo").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatoGeneroPsh() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/generopsh.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Genero</th>';
            html += '<th>Opción</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;



                html += '<tr>' +
                    '<td>' + mydata[i].genero + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaGeneroPsh").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDaGrupoGenPsh() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/grupogeneracionpsh.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Grupo generacional</th>';
            html += '<th>Porcentaje</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;



                html += '<tr>' +
                    '<td>' + mydata[i].perfil + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#GrupoGenPsh").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatoEstadoCivPsh() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/estadocivilpsh.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Estado Civil</th>';
            html += '<th>Porcentaje</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;



                html += '<tr>' +
                    '<td>' + mydata[i].estado + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaEstadoCivPsh").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatoParejaPsh() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/parejapsh.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Estado</th>';
            html += '<th>Porcentaje</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;



                html += '<tr>' +
                    '<td>' + mydata[i].pareja + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaParejaPsh").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatoEscolaridadPsh() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/escolaridadpsh.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Escolaridad</th>';
            html += '<th>Porcentaje</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {


                var porcentaje = mydata[i].porcentaje * 100;



                html += '<tr>' +
                    '<td>' + mydata[i].estudios + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaEscolaridadPsh").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatoTrabajoComposPsh() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/trabajocomposicionpsh.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Tipo</th>';
            html += '<th>Porcentaje </th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var porcentaje = mydata[i].porcentaje * 100;


                html += '<tr>' +
                    '<td>' + mydata[i].tipo + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaTrabajocomposicionPsh").html(html);
        },
        complete: function() {

        }
    });


}



function consultarDatoAfiliacionSeguroPsh() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/afseguropsh.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Esta Afiliado</th>';
            html += '<th>No esta Afiliado</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var afiliado = mydata[i].afiliado * 100;
                var noafiliado = mydata[i].noafiliado * 100;


                html += '<tr>' +
                    '<td>' + afiliado.toFixed(1) + '%' + '</td>' +
                    '<td>' + noafiliado.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaAfiliadoSeguroPsh").html(html);
        },
        complete: function() {

        }
    });


}



function consultarDatoTipoIngresoPsh() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/tipoingresopsh.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Ingreso</th>';
            html += '<th>Porcentaje </th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var porcentaje = mydata[i].porcentaje * 100;


                html += '<tr>' +
                    '<td>' + mydata[i].opciones + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaTipoIngresoPsh").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatoTrabajoSectorPsh() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/trabajosectorpsh.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;



            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Sector Público</th>';
            html += '<th>Sector Privado</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var publico = mydata[i].sectorpublico * 100;
                var privado = mydata[i].sectorprivado * 100;


                html += '<tr>' +
                    '<td>' + publico.toFixed(1) + '%' + '</td>' +
                    '<td>' + privado.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaTrabajoSectorPsh").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatoDescripcionPsh() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/descripcionpsh.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;

            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Descripción</th>';
            html += '<th>Porcentaje</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var porcentaje = mydata[i].porcentaje * 100;



                html += '<tr>' +
                    '<td>' + mydata[i].descripcion + '</td>' +
                    '<td>' + porcentaje.toFixed(1) + '%' + '</td>' +

                    '</tr>';
            }
            $("#tablaDescripcionPsh").html(html);
        },
        complete: function() {

        }
    });


}

function consultarDatoIngresoProvPsh() {

    var municipio = $("#municipio option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/caracterizacion/ingresosprovpsh.php",
        data: {
            municipio: municipio,
            corrida: corrida

        },
        dataType: 'json',
        //beforeSend: function() {        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            var html = '';
            var i;


            html += ' <thead class="customtable text-white" class="text-center">';
            html += '<tr>';

            html += '<th>Trabajo</th>';
            html += '<th>Pensión por jubilación </th>';
            html += '<th>Remesas</th>';
            html += '<th>Pensión alimenticia</th>';


            html += '</tr>';
            html += '</thead class="customtable text-white">';

            for (i = 0; i < mydata.length; i++) {

                var trabajo = mydata[i].trabajo * 100;
                var pensionjub = mydata[i].pensionjub * 100;
                var remesas = mydata[i].remesas * 100;
                var pensionalim = mydata[i].pensionalim * 100;


                html += '<tr>' +
                    '<td>' + trabajo.toFixed(1) + '%' + '</td>' +
                    '<td>' + pensionjub.toFixed(1) + '%' + '</td>' +
                    '<td>' + remesas.toFixed(1) + '%' + '</td>' +
                    '<td>' + pensionalim.toFixed(1) + '%' + '</td>' +
                    '</tr>';
            }
            $("#IngresoProvPsh").html(html);
        },
        complete: function() {

        }
    });


}


function consultarDatoAlcalde() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/calificacionautoridades/alcalde.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>Alcalde</th>';
            html += '<th>Porcentaje</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';


            for (i = 0; i < mydata.length; i++) {

                var porcentaje = mydata[i].porcentaje * 100;


                html += '<tr>' +
                    '<td>' + mydata[i].calificacion + '</td>' +
                    '<td>' + porcentaje.toFixed(2) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaAlcalde").html(html);

        },
        complete: function() {

        }
    });


}

function consultarDatoViceAlcalde() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/calificacionautoridades/vicealcalde.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>Vice Alcalde</th>';
            html += '<th>Porcentaje</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';


            for (i = 0; i < mydata.length; i++) {

                var porcentaje = mydata[i].porcentaje * 100;


                html += '<tr>' +
                    '<td>' + mydata[i].calificacion + '</td>' +
                    '<td>' + porcentaje.toFixed(2) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaVicAlcalde").html(html);

        },
        complete: function() {

        }
    });


}

function consultarDatoSecretaria() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/calificacionautoridades/secretaria.php",
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

            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>Secretaría</th>';
            html += '<th>Porcentaje</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';


            for (i = 0; i < mydata.length; i++) {

                var porcentaje = mydata[i].porcentaje * 100;


                html += '<tr>' +
                    '<td>' + mydata[i].calificacion + '</td>' +
                    '<td>' + porcentaje.toFixed(2) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaSecretaria").html(html);

        },
        complete: function() {

        }
    });


}


function consultarDatoAdAlcalde() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/calificacionautoridades/adalcalde.php",
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


            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>Alcalde</th>';
            html += '<th>Porcentaje</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';


            for (i = 0; i < mydata.length; i++) {

                var porcentaje = mydata[i].porcentaje * 100;


                html += '<tr>' +
                    '<td>' + mydata[i].calificacion + '</td>' +
                    '<td>' + porcentaje.toFixed(2) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaAdAlcalde").html(html);

        },
        complete: function() {

        }
    });


}


function consultarDatoAdViceAlcalde() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/calificacionautoridades/advicealcalde.php",
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


            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>Vice Alcalde</th>';
            html += '<th>Porcentaje</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';


            for (i = 0; i < mydata.length; i++) {

                var porcentaje = mydata[i].porcentaje * 100;


                html += '<tr>' +
                    '<td>' + mydata[i].calificacion + '</td>' +
                    '<td>' + porcentaje.toFixed(2) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaAdViceAlcalde").html(html);

        },
        complete: function() {

        }
    });


}

function consultarDatoAdSecretaria() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/calificacionautoridades/adsecretaria.php",
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


            html += ' <thead class="customtable text-white">';
            html += '<tr>';

            html += '<th>Secretario</th>';
            html += '<th>Porcentaje</th>';



            html += '</tr>';
            html += '</thead class="customtable text-white">';


            for (i = 0; i < mydata.length; i++) {

                var porcentaje = mydata[i].porcentaje * 100;


                html += '<tr>' +
                    '<td>' + mydata[i].calificacion + '</td>' +
                    '<td>' + porcentaje.toFixed(2) + '%' + '</td>' +
                    '</tr>';
            }
            $("#tablaAdSecretaria").html(html);

        },
        complete: function() {

        }
    });


}


function consultarDatoCuadrante() {

    var municipio = $("#municipio option:selected").val();
    var cuadrante = $("#cuadrante option:selected").val();
    var corrida = $("#corrida option:selected").val();

    $.ajax({
        async: false,
        type: "GET",
        url: "util/app/cuadrante.php",
        data: {
            municipio: municipio,
            cuadrante: cuadrante,
            corrida: corrida

        },
        dataType: 'json',

        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {




            var mydata = respuesta.data;
            console.log(mydata);


            for (i = 0; i < mydata.length; i++) {
                // $("#muestra").val(mydata[i]['muestra']);


                $("#muestracuadrante").text('Tamaño Muestra:' + " " + mydata[i]['muestracuadrante']);
                $("#fecha").text('Fecha:' + mydata[i]['fecha']);
                $("#orientacion1").text('De este a oeste: ' + mydata[i]['orientacion1']);
                $("#orientacion2").text('De norte a sur: ' + mydata[i]['orientacion2']);






            }



        },
        complete: function() {

        }
    });
}



$(document).ready(function() {


    $('.collapse').on('show.bs.collapse.active', function(e) {


        var current = $(e.target).parent().find('button').text().trim();
        $(this).parent().addClass('active');
        $("#municipio").change(function(event) {



            switch (current) {
                case ("Caracterización"):
                    consultarDatoSector();
                    consultarDatoSoporteH();
                    consultarDatoParentescoSop();

                    break;

                case ("Descripción sociodemográfica del entrevistado"):
                    consultarDatoGenero();
                    consultarDaGrupoGen();
                    consultarDatoEstadoCiv();
                    consultarDatoPareja();
                    consultarDatoNucleo();
                    consultarDatoEscolaridad();

                    break;

                case ("Descripción socioeconómica del entrevistado"):
                    consultarDatoGeneraIngreso();
                    consultarDatoIngresoProv();
                    consultarDatoRazonNogenraIng();
                    consultarDatoTrabajoRealiza();
                    consultarDatoTrabajoCompos();
                    consultarDatoTipoIngreso();
                    consultarDatoTrabajoSector()
                    consultarDatoAfiliacionSeguro();
                    consultarDatoDescripcionEntrevistado();
                    consultarDatoDescripcionNseAlto();
                    consultarDatoDescripcionNseMedio();
                    consultarDatoDescripcionNsebajo();

                    break;

                case ("Descripción del principal soporte del hogar"):
                    consultarDatoGeneroPsh();
                    consultarDaGrupoGenPsh();
                    consultarDatoEstadoCivPsh();
                    consultarDatoParejaPsh();
                    consultarDatoEscolaridadPsh();

                    break;
                case ("Descripción económica del principal soporte económico del hogar"):

                    consultarDatoTrabajoComposPsh();
                    consultarDatoAfiliacionSeguroPsh();
                    consultarDatoTipoIngresoPsh();
                    consultarDatoTrabajoSectorPsh();
                    consultarDatoDescripcionPsh();
                    consultarDatoIngresoProvPsh();

                    break;

                default:
                    // code block
            }

            $('.collapse').on('hidden.bs.collapse', function() {
                current = "";
                $(this).parent().removeClass('active');
            });



        });

        $("#corrida").change(function(event) {



            switch (current) {
                case ("Caracterización"):
                    consultarDatoSector();
                    consultarDatoSoporteH();
                    consultarDatoParentescoSop();
                    current = "";
                    break;

                case ("Descripción sociodemográfica del entrevistado"):
                    consultarDatoGenero();
                    consultarDaGrupoGen();
                    consultarDatoEstadoCiv();
                    consultarDatoPareja();
                    consultarDatoNucleo();
                    consultarDatoEscolaridad();
                    current = "";
                    break;

                case ("Descripción socioeconómica del entrevistado"):
                    consultarDatoGeneraIngreso();
                    consultarDatoIngresoProv();
                    consultarDatoRazonNogenraIng();
                    consultarDatoTrabajoRealiza();
                    consultarDatoTrabajoCompos();
                    consultarDatoTipoIngreso();
                    consultarDatoTrabajoSector()
                    consultarDatoAfiliacionSeguro();
                    consultarDatoDescripcionEntrevistado();
                    consultarDatoDescripcionNseAlto();
                    consultarDatoDescripcionNseMedio();
                    consultarDatoDescripcionNsebajo();
                    current = "";
                    break;

                case ("Descripción del principal soporte del hogar"):
                    consultarDatoGeneroPsh();
                    consultarDaGrupoGenPsh();
                    consultarDatoEstadoCivPsh();
                    consultarDatoParejaPsh();
                    consultarDatoEscolaridadPsh();
                    current = "";

                    break;
                case ("Descripción económica del principal soporte económico del hogar"):

                    consultarDatoTrabajoComposPsh();
                    consultarDatoAfiliacionSeguroPsh();
                    consultarDatoTipoIngresoPsh();
                    consultarDatoTrabajoSectorPsh();
                    consultarDatoDescripcionPsh();
                    consultarDatoIngresoProvPsh();
                    current = "";

                    break;

                default:
                    // code block
            }

            $('.collapse').on('hidden.bs.collapse', function() {
                current = "";
                $(this).parent().removeClass('active');
            });




        });









    });



    $("#headingOne").click(function() {
        consultarDatoSector();
        consultarDatoSoporteH();
        consultarDatoParentescoSop();
        $('.collapse').on('hidden.bs.collapse', function() {
            current = "";
            $(this).parent().removeClass('active');
        });

    });


    $("#headingTwo").click(function() {
        consultarDatoGenero();
        consultarDaGrupoGen();
        consultarDatoEstadoCiv();
        consultarDatoPareja();
        consultarDatoNucleo();
        consultarDatoEscolaridad();
        $('.collapse').on('hidden.bs.collapse', function() {
            current = "";
            $(this).parent().removeClass('active');
        });


    });

    $("#headingThree").click(function() {
        consultarDatoGeneraIngreso();
        consultarDatoIngresoProv();
        consultarDatoRazonNogenraIng();
        consultarDatoTrabajoRealiza();
        consultarDatoTrabajoCompos();
        consultarDatoTipoIngreso();
        consultarDatoTrabajoSector()
        consultarDatoAfiliacionSeguro();
        consultarDatoDescripcionEntrevistado();
        consultarDatoDescripcionNseAlto();
        consultarDatoDescripcionNseMedio();
        consultarDatoDescripcionNsebajo();

        $('.collapse').on('hidden.bs.collapse', function() {
            current = "";
        });


    });

    $("#headingFour").click(function() {
        consultarDatoGeneroPsh();
        consultarDaGrupoGenPsh();
        consultarDatoEstadoCivPsh();
        consultarDatoParejaPsh();
        consultarDatoEscolaridadPsh();
        $('.collapse').on('hidden.bs.collapse', function() {
            current = "";
        });

    });

    $("#headingFive").click(function() {
        consultarDatoTrabajoComposPsh();
        consultarDatoAfiliacionSeguroPsh();
        consultarDatoTipoIngresoPsh();
        consultarDatoTrabajoSectorPsh();
        consultarDatoDescripcionPsh();
        consultarDatoIngresoProvPsh();

        $('.collapse').on('hidden.bs.collapse', function() {
            current = "";
        });

    });





    /*
        $("#headingOne").on("click", function(event) {

            consultarDatoSector();
            consultarDatoSoporteH();
            consultarDatoParentescoSop();
        });


        $("#headingTwo").on("click", function(event) {

            consultarDatoGenero();
            consultarDaGrupoGen();
            consultarDatoEstadoCiv();
            consultarDatoPareja();
            consultarDatoNucleo();
            consultarDatoEscolaridad();
        });
        
               $("#three").on("click", function(event) {

                   consultarDatoGeneraIngreso();
                   consultarDatoIngresoProv();
                   consultarDatoRazonNogenraIng();
                   consultarDatoTrabajoRealiza();
                   consultarDatoTrabajoCompos();
                   consultarDatoTipoIngreso();
                   consultarDatoTrabajoSector()
                   consultarDatoAfiliacionSeguro();
                   consultarDatoDescripcionEntrevistado();
                   consultarDatoDescripcionNseAlto();
                   consultarDatoDescripcionNseMedio();
                   consultarDatoDescripcionNsebajo();
               });

               $("#four").on("click", function(event) {

                   consultarDatoGeneroPsh();
                   consultarDaGrupoGenPsh();
                   consultarDatoEstadoCivPsh();
                   consultarDatoParejaPsh();
                   consultarDatoEscolaridadPsh();
               });

               $("#five").on("click", function(event) {

                   consultarDatoTrabajoComposPsh();
                   consultarDatoAfiliacionSeguroPsh();
                   consultarDatoTipoIngresoPsh();
                   consultarDatoTrabajoSectorPsh();
                   consultarDatoDescripcionPsh();
                   consultarDatoIngresoProvPsh();
               });

           */








    $("#municipio").change(function(event) {

        var active = $(".tab-pane.active").attr("id");

        consultarDatoCuadrante();

        switch (active) {


            case ("profile"):

                consultarDatosCReligiosa();
                consultarDatosRel();
                consultarDatosAfReligiosa();
                active = "";
                break;
            case ("contact"):
                consultarDatosLicMun();
                consultarDatosLicMun2();
                consultarDatosServiciosMun();
                consultarDatosServiciosNac();
                consultarDatosCapGestion();
                consultarDatoAlcalde();
                consultarDatoViceAlcalde();
                consultarDatoSecretaria();
                consultarDatoAdAlcalde();
                consultarDatoAdViceAlcalde();
                consultarDatoAdSecretaria();
                active = "";
                break;

            case ("percepcion"):
                consultarDatosPercDesarrollo();
                consultarDatosPercPobreza();

                active = "";
                break;

            case ("seguridad"):
                consultarIndVictim();
                consultarDatosSegSector();
                consultarDatosSegDia();
                consultarDatosSegNoche();
                consultarDatosTrabPolicia();
                consultarDatosProfPolicia();
                consultarDatoSecretaria();
                active = "";
                break;

            case ("frecuencia"):
                consultarDatosFrecSituaciones();
                active = "";
                break;

            case ("transporte"):
                consultarDatosTransporte();
                active = "";
                break;

            case ("sector"):
                consultarDatosProResidencia();
                consultarDatosProMunicipio();
                consultarDatosPais();
                active = "";
                break;

            case ("obras"):
                consultarDatosObras();
                break;

            case ("gustar"):
                consultarDatoGMunicipio();
                consultarDatoNGMunicipio();
                consultarDatoGResidencia();
                consultarDatoNGResidencia();
                break;
            case ("agenda"):
                consultarDatoCondVida();
                consultarDatoSugDestino();

                break;

            case ("tematica"):
                consultarDatoSSimpatia();
                consultarDatosExpectativa();
                consultarDatoIntencion();
                consultarDatoPisoTecho();

                break;
            default:
                //Declaraciones ejecutadas cuando ninguno de los valores coincide con el valor de la expresión
                break;
        }


    });


    $("#cuadrante").change(function(event) {


        var active = $(".tab-pane.active").attr("id");
        consultarDatoCuadrante();



        switch (active) {


            case ("profile"):
                console.log(active);
                consultarDatosCReligiosa();
                consultarDatosRel();
                consultarDatosAfReligiosa();
                active = "";
                break;
            case ("contact"):
                consultarDatosLicMun();
                consultarDatosLicMun2();
                consultarDatosServiciosMun();
                consultarDatosServiciosNac();
                consultarDatosCapGestion();
                consultarDatoAlcalde();
                consultarDatoViceAlcalde();
                consultarDatoSecretaria();
                consultarDatoAdAlcalde();
                consultarDatoAdViceAlcalde();
                consultarDatoAdSecretaria();
                active = "";
                break;

            case ("percepcion"):
                consultarDatosPercDesarrollo();
                consultarDatosPercPobreza();

                active = "";
                break;

            case ("seguridad"):
                consultarIndVictim();
                consultarDatosSegSector();
                consultarDatosSegDia();
                consultarDatosSegNoche();
                consultarDatosTrabPolicia();
                consultarDatosProfPolicia();
                active = "";
                break;

            case ("frecuencia"):
                consultarDatosFrecSituaciones();
                active = "";
                break;

            case ("transporte"):
                consultarDatosTransporte();
                active = "";
                break;

            case ("sector"):
                consultarDatosProResidencia();
                consultarDatosProMunicipio();
                consultarDatosPais();
                active = "";
                break;

            case ("obras"):
                consultarDatosObras();
                break;

            case ("gustar"):
                consultarDatoGMunicipio();
                consultarDatoNGMunicipio();
                consultarDatoGResidencia();
                consultarDatoNGResidencia();
                break;
            case ("agenda"):
                consultarDatoCondVida();
                consultarDatoSugDestino();

                break;

            case ("tematica"):
                consultarDatoSSimpatia();
                consultarDatosExpectativa();
                consultarDatoIntencion();
                consultarDatoPisoTecho();

                break;
            default:
                //Declaraciones ejecutadas cuando ninguno de los valores coincide con el valor de la expresión
                break;
        }


    });




    $("#profile-tab").on("click", function(event) {

        consultarDatosCReligiosa();
        consultarDatosRel();
        consultarDatosAfReligiosa();

    });


    $("#contact-tab").on("click", function(event) {

        consultarDatosLicMun();
        consultarDatosLicMun2();
        consultarDatosServiciosMun();
        consultarDatosServiciosNac();
        consultarDatosCapGestion();
        consultarDatoAlcalde();
        consultarDatoViceAlcalde();
        consultarDatoSecretaria();
        consultarDatoAdAlcalde();
        consultarDatoAdViceAlcalde();
        consultarDatoAdSecretaria();


    });



    $("#percepcion-tab").on("click", function(event) {



        consultarDatosPercDesarrollo();
        consultarDatosPercPobreza();


    });

    $("#seguridad-tab").on("click", function(event) {

        consultarIndVictim();
        consultarDatosSegSector();
        consultarDatosSegDia();
        consultarDatosSegNoche();
        consultarDatosTrabPolicia();
        consultarDatosProfPolicia();


    });


    $("#frecuencia-tab").on("click", function(event) {

        consultarDatosFrecSituaciones();


    });


    $("#transporte-tab").on("click", function(event) {

        consultarDatosTransporte();



    });


    $("#sector-tab").on("click", function(event) {

        consultarDatosProResidencia();
        consultarDatosProMunicipio();
        consultarDatosPais();








    });



    $("#obras-tab").on("click", function(event) {

        consultarDatosObras();


    });



    $("#gustar-tab").on("click", function(event) {

        consultarDatoGMunicipio();
        consultarDatoNGMunicipio();
        consultarDatoGResidencia();
        consultarDatoNGResidencia();


    });


    $("#agenda-tab").on("click", function(event) {

        consultarDatoCondVida();
        consultarDatoSugDestino();

    });


    $("#tematica-tab").on("click", function(event) {

        consultarDatoSSimpatia();
        consultarDatosExpectativa();
        consultarDatoIntencion();
        consultarDatoPisoTecho();



        $("#municipio").change(function(event) {





        });


        $("#cuadrante").change(function(event) {


            consultarDatoSSimpatia();
            consultarDatosExpectativa();
            consultarDatoIntencion();
            consultarDatoPisoTecho();


        });

        $("#corrida").change(function(event) {


            consultarDatoSSimpatia();
            consultarDatosExpectativa();
            consultarDatoIntencion();
            consultarDatoPisoTecho();



        });
    });





});