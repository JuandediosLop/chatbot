/*

  ! Se utilizo Jquery: Sabemos que esta obsoleto pero para el rapido manejo del DOM se utilizo. 

/*

 ? Cuando el documento este listo que en el id messages (es el input para añadir un mensaje) despues de presionar alguna tecla tecla (keyup) realizara una funcion la cual tiene una caracteristica la cual es validar si el id messages tiene un valor, si lo tiene al button con el id #send le agrega un display block (lo mostrara), caso contrario obtendra un displey none

 * importante se esta ejecuatando cada vez que el documento a terminar de ejecutar la carga

*/

$(document).ready(function () {
  $("#messages").on("keyup", function () {
    if ($("#messages").val()) {
      $("#send").css("display", "block");
    } else {
      $("#send").css("display", "none");
    }
  });
});

//función para añadir el mensaje del usuario
function enviarMensajeUser() {
  $userMessage = $("#messages").val();
  $appendUserMessage = `<div class="chat usersMessages">
                          ${$userMessage}
                        </div>
                             `;
  $("#messageDisplaySection").append($appendUserMessage);

  // ajax start
  $.ajax({
    url: "../include/bot.php",
    type: "POST",
    // sending data
    data: { messageValue: $userMessage },
    // response text
    success: function (data) {
      // show response
      $appendBotResponse = `<div class="messagesContainer"> 
                              <div class="chat botMessages">
                              ${data}
                              </div>
                            </div>`;

      $("#messageDisplaySection").append($appendBotResponse);
    },
  });
  $("#messages").val("");
  $("#send").css("display", "none");
}

// Cuando se haga click en enviar
$("#send").on("click", function (e) {
  enviarMensajeUser();
});

//metodo para la carrera
$("#carrera").on("click", function () {
  $("#messages").val("Carrera");
  enviarMensajeUser();
});

//metodo para la admisión
$("#admision").on("click", function () {
  $("#messages").val("Admisiones");
  enviarMensajeUser();
});

//metodo para la admisión
$("#servicio").on("click", function () {
  $("#messages").val("Servicios");
  enviarMensajeUser();
});
