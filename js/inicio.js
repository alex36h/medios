function mostrarDatos() {

    $.ajax({
        //async: true,
        type: "POST",
        url: "util/app/query.php",
        //data: {},
        dataType: 'json',
        beforeSend: function() {



        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {


            var mydata = respuesta.data;

            for (i = 0; i < mydata.length; i++) { //cuenta la cantidad de registros
                var data = "<tr><td>" +
                    mydata[i].religion + "</td><td>" +
                    mydata[i].cuadrante + "</td></tr>"

                $("#tablaReligion").append(data);

            }

        },
        //complete: function(){}
    });


}

function mostrarDatosUser() {



    $.ajax({
        //async: true,
        type: "POST",
        url: "util/usuarios/query.php",
        //data: {},
        dataType: 'json',
        beforeSend: function() {
            $("#cntTabla").hide();
            $("#cargando").html('<img src="img/system/loading.gif" height="70" width="70">');


        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {
            $("#cargando").html('');
            $("#cntTabla").show();

            var mydata = respuesta.data;

            var t = $("#tablaUsuarios").DataTable({
                destroy: true,
                data: mydata,
                columns: [
                    { "data": 'row' },
                    { "data": 'btn_gestion', className: "text-center" },
                    { "data": 'usuario', className: "text-center" },
                    { "data": 'nombre', className: "text-center" },
                    { "data": 'tipo_usuario', className: "text-center" },
                    { "data": 'email', className: "text-center" }
                ],
                "columDefs": [{
                        "searchable": false,
                        "orderable": false,
                        "targets": [0] //Para que el numero no tenga orden solo es un indice

                    }

                ],

                "order": [
                    [0, 'asc']
                ], //asc-desc
                "language": {
                    "url": "lib/js/DataTables-1.10.21/Spanish.json"
                },
                "pagingType": "full_numbers" // Para Colocar el First $ Last

            });


            t.on('order.dt search.dt', function() {
                t.column(0, { search: 'applied', order: 'applied' }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw();


        },
        //complete: function(){}
    });


}






$(document).ready(function() {




    /*$("#consultar").click(function() {
        mostrarDatos();
    });*/


    $("#formConsulta").submit(function() {


        var municipio = $("#municipio option:selected").val();
        var cuadrante = $("#cuadrante option:selected").val();
        var corrida = $("#corrida option:selected").val();

        console.log(municipio);
        console.log(cuadrante);

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

                for (i = 0; i < mydata.length; i++) { //cuenta la cantidad de registros
                    var data = "<tr><td>" +
                        mydata[i].religion + "</td><td>" +
                        mydata[i].cuadrante + "</td></tr>"

                    $("#tablaReligion").append(data);

                }
            },
            complete: function() {

            }
        });

        return false;
    });


});