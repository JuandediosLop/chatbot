/*var numero = 0;
function adelantar()
{
    numero = numero + 1;
    if (numero > 5)
    numero = 1;
    var video = document.getElementById("video");
    video.src="img/video"+ numero + ".mp4";
} */

var dato=0;
var numero=0;


function iniciar(){
    numero = numero = 1;
if (numero=1)
var video = document.getElementById("video");
    video.src="img/video" + numero + ".mp4"; 
}

function carrera1(){
    numero = 2;
if (numero=2)
var video = document.getElementById("video");
    video.src="img/video" + numero + ".mp4"; 
}

function carrera2(){
    numero = 3;
if (numero=3)
var video = document.getElementById("video");
    video.src="img/video" + numero + ".mp4"; 
}

function carrera3(){
    numero = 4;
if (numero=4)
var video = document.getElementById("video");
    video.src="img/video" + numero + ".mp4"; 
}

function salir(){
    numero = 22;
if (numero=22)
var video = document.getElementById("video");
    video.src="img/video" + numero + ".mp4"; 
}


function enviar(){

    var valor = document.getElementById("messages").value;

    switch (valor) {
        case 'contacto':
            numero = 5;
            break;
        case 'ayuda financiera':
            numero = 6;
            break;
        case 'agricola':
            numero = 7;
            break;
        case 'ingenieria agricola':
            numero = 7;
            break;
        case 'industrial':
            numero = 8;
            break;
        case 'ingenieria industrial':
            numero = 8;
            break;
        case 'sistemas':
            numero = 9;
            break;
        case 'ingenieria en sistemas':
            numero = 9;
            break;
        case 'fisica':
            numero = 10;
            break;
            case 'profesorado en fisica':
                numero = 10;
                break;
                case 'profesorado especializado en educacion fisica':
                    numero = 10;
                    break;
        case 'primaria':
            numero = 11;
            break;
            case 'profesorado en primaria':
            numero = 11;
            break;
            case 'profesorado especializado en educacion primaria':
            numero = 11;
            break;
        case 'profesorado especializado en ingles':
            numero = 12;
            break;
            case 'ingles':
            numero = 12;
            break;
            case 'profesorado en ingles':
            numero = 12;
            break;
        case 'laboratorios':
            numero = 13;
            break;
            case 'laboratorio':
            numero = 13;
            break;
        case 'asuntos estudiantiles':
            numero = 14;
            break;
            case 'asunto estudiantil':
            numero = 14;
            break;
        case 'hola':
            numero = 15;
            break;
        case 'calidad academica':
            numero = 16;
            break;
        case 'consejeria':
            numero = 17;
            break;
        case 'como estas':
            numero = 18;
            break;
            case '¿como estas?':
            numero = 18;
            break;
        case 'quien eres':
            numero = 19;
            break;
            case '¿quien eres?':
            numero = 19;
            break;
        case 'adios':
            numero = 20;
            break;
        case 'gracias':
            numero = 21;
            break;

        default: numero=23;
    }

    var video = document.getElementById("video");
            video.src="img/video" + numero + ".mp4"; 
 
 

}

