function mostrarGraficoInicio() {

    $.ajax({
        //async: true,
        type: "POST",
        url: "util/inicio/query.php",
        //data: {},
        dataType: 'json',
        //beforeSend: function(){},
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {
            switch (respuesta.estado) {
                case 1:

                    Highcharts.chart('grafico_inicio', {
                        chart: {
                            type: 'column'
                        },
                        title: {
                            text: 'Total de visitas por día'
                        },
                        subtitle: {
                            text: 'Fuente: M&R Consultores'
                        },
                        xAxis: {
                            reversed: true,
                            categories: respuesta.data.categories,
                            crosshair: true
                        },
                        yAxis: {
                            min: 0,
                            title: {
                                text: 'Total'
                            }
                        },
                        tooltip: {
                            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                '<td style="padding:0"><b>{point.y}</b></td></tr>',
                            footerFormat: '</table>',
                            shared: true,
                            useHTML: true
                        },
                        plotOptions: {
                            column: {
                                pointPadding: 0.2,
                                borderWidth: 0
                            }
                        },
                        series: respuesta.data.series
                    });

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


    /*
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Average Rainfall'
        },
        subtitle: {
            text: 'Source: WorldClimate.com'
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rainfall (mm)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Tokyo',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
    
        }, {
            name: 'New York',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]
    
        }, {
            name: 'London',
            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]
    
        }, {
            name: 'Berlin',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]
    
        }]
    });
    */

    mostrarGraficoInicio();


    var wordStates = document.querySelectorAll(".list-of-states li");
    var svgStates = document.querySelectorAll("#states > *");

    function removeAllOn() {
        wordStates.forEach(function(el) {
            el.classList.remove("on");
        });
        svgStates.forEach(function(el) {
            el.classList.remove("on");
        });
    }

    function addOnFromList(el) {
        var stateCode = el.getAttribute("data-state");
        var svgState = document.querySelector("#" + stateCode);
        el.classList.add("on");
        svgState.classList.add("on");
    }

    function addOnFromState(el) {
        var stateId = el.getAttribute("id");
        var wordState = document.querySelector("[data-state='" + stateId + "']");
        el.classList.add("on");
        wordState.classList.add("on");
    }

    wordStates.forEach(function(el) {
        el.addEventListener("mouseenter", function() {
            addOnFromList(el);
        });
        el.addEventListener("mouseleave", function() {
            removeAllOn();
        });

        el.addEventListener("touchstart", function() {
            removeAllOn();
            addOnFromList(el);
        });
    });

    svgStates.forEach(function(el) {
        el.addEventListener("mouseenter", function() {
            addOnFromState(el);
        });
        el.addEventListener("mouseleave", function() {
            removeAllOn();
        });

        el.addEventListener("touchstart", function() {
            removeAllOn();
            addOnFromState(el);
        });
    });

});