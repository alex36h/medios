$(document).ready(function() {




    $("#formConsulta").submit(function() {


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

        return false;
    });


});