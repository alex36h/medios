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

            html += ' <thead>';
            html += '<tr>';

            html += '<th>Denominación</th>';
            html += '<th>Cuadrante</th>';

            html += '</tr>';
            html += '</thead>';


            for (i = 0; i < mydata.length; i++) {
                html += '<tr>' +
                    '<td>' + mydata[i].religion + '</td>' +
                    '<td>' + mydata[i].cuadrante + '</td>' +
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

            html += '<th>Servicio</th>';
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
        var municipio = $("#municipio option:selected").val();
        var data = [
            ['ni-as', municipio],
            ['ni-an', municipio],
            ['ni-224', municipio],
            ['ni-6330', 3],
            ['ni-ca', 4],
            ['ni-gr', 5],
            ['ni-ji', 6],
            ['ni-le', 7],
            ['ni-mn', 8],
            ['ni-ms', 9],
            ['ni-ci', 10],
            ['ni-es', 11],
            ['ni-md', 12],
            ['ni-mt', 13],
            ['ni-ns', 14],
            ['ni-bo', 15],
            ['ni-co', 16],
            ['ni-co', 17]
        ];

        // Create the chart
        Highcharts.mapChart('container', {
            chart: {
                map: 'countries/ni/ni-all'
            },

            title: {
                text: 'Highmaps basic demo'
            },

            subtitle: {
                text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/ni/ni-all.js">Nicaragua</a>'
            },

            mapNavigation: {
                enabled: true,
                buttonOptions: {
                    verticalAlign: 'bottom'
                }
            },

            colorAxis: {
                min: 0
            },

            series: [{
                data: data,
                name: 'Random data',
                states: {
                    hover: {
                        // color: '#c31432'
                    },
                    color: {
                        color: '#c31432'
                    }
                },
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }]
        });


        return false;

    }); // Prepare demo data
    // Data is joined to map using value of 'hc-key' property by default.
    // See API docs for 'joinBy' for more info on linking data and map.



});