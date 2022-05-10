<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica #1 | IA</title>
     <!-- fontawesome -->
     <script src="https://kit.fontawesome.com/42e7f98aa1.js" crossorigin="anonymous"></script>
     <script src="js/holo.js"></script>

    <link rel="stylesheet" href="css/bot.css">
</head>
<body>
    <div id="container">
        <div id="dot1"></div>
        <div id="dot2"></div>
        <div id="chatBtn"> <button id="botonChat" onclick="iniciar()"><img src="./img/chat.png" alt=""></button> </div>
        <div id="screen">
            <div id="header">
                <div id="titulo">
                    JACK UVG - soporte 
                </div>
                <div id="actualizar">
                    <button id="botonAct" onclick="iniciar()"><img src="./img/refresh.png" alt=""></button>
                </div>
                <div id="cerrar">
                    <button id="botonCerrar" onclick="salir()"><img src="./img/close.png" alt=""></button>
                </div>
             
            </div>
            
            <div id="messageDisplaySection">
                <!--Mensajes del bot-->
                <div class="chat botMessages">¡Hola, mi nombre es Jack! Soy la mascota de UVG, estoy para ayudarte. <br> <br>
                Para poder atenderte, por favor: <br>
                1. Escribe tu pregunta. <br>
                2. Selecciona alguno de los temas que aparecen a continuación:
                </div>
                <div class="options">
                    <input type="submit" id="carrera" value="Carreras" onclick="carrera1()">
                    <input type="submit" id="admision" value="Admisiones" onclick="carrera2()">
                    <input type="submit" id="servicio" value="Servicios" onclick="carrera3()">
                </div>
                <!--Mensajes del usuario-->

        </div>
            <!-- messages input field -->
            <div id="userInput">
                <input type="text" name="messages" id="messages" autocomplete="OFF" placeholder="Escribe tu mensaje." required>
                <input type="submit" value="Enviar" id="send" name="send" onclick="enviar()">
            </div>
        </div>
    </div>

    <!-- jQuery CDN -->
  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src="./js/main.js"></script>

    <div id="holograma">
    <video   autoplay src="img/video.mp4" width="1500" height="650" id="video"> </video>
    </div>
</body>
</html>