 window.onload = function () {
            // Variables
            const IMAGENES = [
                'webroot/media/images/num1_1.jpg',
                'webroot/media/images/num1_2.jpg',
                'webroot/media/images/num1_3.jpg',
                'webroot/media/images/num1_4.jpg',
                'webroot/media/images/num1_5.jpg',
                'webroot/media/images/num2.jpg',
                'webroot/media/images/num3.jpg',
                'webroot/media/images/num4.jpg',
                'webroot/media/images/num5.jpg',
                'webroot/media/images/num6.JPG',
                'webroot/media/images/num7.jpg'

             ];
    const TIEMPO_INTERVALO_MILESIMAS_SEG = 3000;
    let posicionActual = 0;
    let $botonRetroceder = document.querySelector('#retroceder');
    let $botonAvanzar = document.querySelector('#avanzar');
    let $imagen = document.querySelector('#imagen');
    let $botonPlay = document.querySelector('#play');
    let $botonStop = document.querySelector('#stop');
    let intervalo;

    // Funciones

    /**
     * Funcion que cambia la foto en la siguiente posicion
     */
    function pasarFoto() {
        if(posicionActual >= IMAGENES.length - 1) {
            posicionActual = 0;
        } else {
            posicionActual++;
        }
        renderizarImagen();
    }

    /**
     * Funcion que cambia la foto en la anterior posicion
     */
    function retrocederFoto() {
        if(posicionActual <= 0) {
            posicionActual = IMAGENES.length - 1;
        } else {
            posicionActual--;
        }
        renderizarImagen();
    }

    /**
     * Funcion que actualiza la imagen de imagen dependiendo de posicionActual
     */
    function renderizarImagen () {
        $imagen.style.backgroundImage = `url(${IMAGENES[posicionActual]})`;
    }

    /**
     * Activa el autoplay de la imagen
     */
    function playIntervalo() {
        intervalo = setInterval(pasarFoto, TIEMPO_INTERVALO_MILESIMAS_SEG);
        // Desactivamos los botones de control
        $botonAvanzar.setAttribute('disabled', true);
        $botonRetroceder.setAttribute('disabled', true);
        $botonPlay.setAttribute('disabled', true);
        $botonPlay.style.border = "3px solid white";
        $botonStop.removeAttribute('disabled');
        $botonStop.style.border = "3px solid black";

    }

    /**
     * Para el autoplay de la imagen
     */
    function stopIntervalo() {
        clearInterval(intervalo);
        // Activamos los botones de control
        $botonAvanzar.removeAttribute('disabled');
        $botonRetroceder.removeAttribute('disabled');
        $botonPlay.removeAttribute('disabled');
        $botonPlay.style.border = "3px solid black";
        $botonStop.setAttribute('disabled', true);
        $botonStop.style.border = "3px solid white";
    }

    // Eventos
    $botonAvanzar.addEventListener('click', pasarFoto);
    $botonRetroceder.addEventListener('click', retrocederFoto);
    $botonPlay.addEventListener('click', playIntervalo);
    $botonStop.addEventListener('click', stopIntervalo);
    // Iniciar
    renderizarImagen();
} 


 
 
function campoO() { 
    //Busqueda de checkBox    
     var check = document.getElementById("check");
        //Condición de selección OBLIGATORIA
        if (check.checked === true){
            //Si hay alguna seleccion se borra el mensaje de EEROR
            document.getElementById("checkError").innerHTML = "";
        } else {//Mensaje de ERROR si no hay selección
           document.getElementById("checkError").innerHTML = "Acepte para seguir";
            return false;
        }
        return true;
    }
    
   function myBoton1(){
       document.getElementById("checkError").innerHTML = "";
    ventana = window.open("","ventanaBoton1","width=650, height=500");
    ventana.document.write("<h1>Política de Privacidad</h1><h3>Responsable</h3><p>Nerea Álvarez Justel</p><h3>Finalidad</h3><p>Presentación de sercicios de diseño gráfico y desarrollo web; gestión y analisis de la utilización del sitio web; respuesta a solicitudes y peticiones; envio de comunicaciones relacionadas con nuestro servicio</p><h3>Legitimización</h3><p>Interés legitimo y consentimiento expreso</p><h3>Destinatarios</h3><p>No se ceden datos a terceros, salvo obligación legal</p><h3>Derechos</h3><p>Puede ejercer los derechos relaticos a la protecion de sus datos personales en IES Los Sauces</p>");
} 


function cambiarMayus(valor) {
    return valor.toLowerCase();
}


//Creamos funcion propapia para el uso del FOCUS
function numExp() {
    //Variable asociada a su ID. Elemento de FOCUS
    var numExp = document.getElementById("numero").value;
     var btEnter = document.getElementById("btEnter");

    //NUMERO DE EXPEDIENTE
     //Le damos la condicion de VACIO pero NO OBLIGAROIO
    if (numExp !== "") {
        //Condición para elementos numericos 
        if (isNaN(numExp)) {
            document.getElementById("numero").style.border = "2px solid red";
            document.getElementById("errorB").innerHTML = "Solo admite números";
             btEnter.disabled = true;
        } else {//Si no cumple la condicion valor correcto
            document.getElementById("numero").style.border = "2px solid black";
            document.getElementById("errorB").innerHTML = "";
            btEnter.disabled = false;
        }
    }
}