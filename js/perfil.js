function cargarPerfil() {

    $.ajax({
        type: "POST",
        url: "util/usuarios/queryperfil.php",
        //data: {},
        dataType: 'json',
        beforeSend: function() {
            // $("#usuarios").empty();
        },
        error: function(request, status, error) {
            alert(request.responseText);
        },
        success: function(respuesta) {
            switch (respuesta.estado) {
                case 1:


                    var mydata = respuesta.data;

                    for (i = 0; i < mydata.length; i++) {

                        console.log(mydata[i]['usuario']);
                        console.log(mydata[i]['nombre']);
                        console.log(mydata[i]['email']);
                        console.log(mydata[i]['clave']);

                        $("#usuario").val(mydata[i]['usuario']);
                        $("#nombre").val(mydata[i]['nombre']);
                        $("#email").val(mydata[i]['email']);
                        $("#clave").val(mydata[i]['clave']);

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



    cargarPerfil();


    $("#formPerfil").submit(function() {


        var usuario = $("#usuario").val();
        var nombre = $("#nombre").val();
        var email = $("#email").val();
        var clave = $("#clave").val();


        $.ajax({
            async: false,
            type: "POST",
            url: "util/usuarios/gestionperfil.php",
            data: {
                usuario: usuario,
                nombre: nombre,
                email: email,
                clave: clave
            },
            dataType: 'json',
            //beforeSend: function(){},
            error: function(request, status, error) {
                alert(request.responseText);
            },
            success: function(respuesta) {
                switch (respuesta.estado) {
                    case 1:
                        $('#myModalSuccessBody').html(respuesta.mensaje);
                        $('#myModalSuccess').modal('show');


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
            complete: function() {
                $('#btn_submit').prop("disabled", false);
                $('#btn_submit').html("Acceder");
            }
        });

        return false;


    });

    return false;

});