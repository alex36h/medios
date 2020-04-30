/*  var wordStates = document.querySelectorAll(".list-of-states li");
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
 */

$(document).ready(function() {

    $("#formLogin").submit(function() {

        var usuario = $("#usuario").val().toLowerCase();
        var clave = $("#clave").val();

        //console.log(usuario+' - '+clave);

        $.ajax({
            async: true,
            type: "POST",
            url: "util/login/login.php",
            data: {
                usuario: usuario,
                clave: clave
            },
            dataType: 'json',
            beforeSend: function() {
                $('#btn_submit').html("Consultando");
                $('#btn_submit').prop("disabled", true);
            },
            error: function(request, status, error) {
                alert(request.responseText);
            },
            success: function(respuesta) {
                switch (respuesta.estado) {
                    case 1:
                        document.location = '';
                        break;
                    case 2:
                        $('#myModalWarningBody').html(respuesta.mensaje);
                        $('#myModalWarning').modal('show');
                        $("#clave").val('');
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

});