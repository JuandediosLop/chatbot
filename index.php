<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica #1 | IA</title>
    <link rel="stylesheet" href="css/bot.css">
</head>
<body>
    <div id="container">
        <div id="dot1"></div>
        <div id="dot2"></div>
        <div id="screen">
            <div id="header">JACK UVG - soporte</div>
            <div id="messageDisplaySection">
                <!--Mensajes del bot-->
                <div class="chat botMessages">¡Hola, mi nombre es Jack! Soy la mascota de UVG, estoy para ayudarte. <br> <br>
                Para poder atenderte, por favor: <br>
                1. Escribe tu pregunta. <br>
                2. Selecciona alguno de los temas que aparecen a continuación:
                </div>
                <div class="options">
                    <input type="submit" id="carrera" value="Carreras">
                    <input type="submit" id="admision" value="Admisiones">
                    <input type="submit" id="servicio" value="Servicios">
                </div>
                <!--Mensajes del usuario-->

        </div>
            <!-- messages input field -->
            <div id="userInput">
                <input type="text" name="messages" id="messages" autocomplete="OFF" placeholder="Escribe tu mensaje." required>
                <input type="submit" value="Enviar" id="send" name="send">
            </div>
        </div>
    </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src="./js/main.js"></script>
</body>
</html>