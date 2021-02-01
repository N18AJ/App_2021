<?php
/**
 * @author Nerea Álvarez Justel
 * @since 26/01/2021
 * @version 26/01/2021
 */

if (isset($_REQUEST['Volver'])) {
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del login
    header('Location: index.php');
    exit;
}


$apodSelected = "selected"; //marcamos como seleccionado el servicio por defecto (apod)
$apodDisplay = "block"; //mostramos el servicio por defecto (apod)
error_reporting(0);
if(isset($_REQUEST['enviar'])) { //si se ha enviado una fecha (Hecho por Rodrigo)
    //llamamos al servicio y le pasamos la fecha introducida por el usuario
    $aServicioAPOD = REST::sevicioAPOD($_REQUEST['fecha']);
}
else { //si no
    //llamamos al servicio y le pasamos la fecha de hoy
    $aServicioAPOD = REST::sevicioAPOD(date('Y-m-d'));
}
error_reporting(-1);

if(isset($error)) { //si ha ocurrido algún error
    //guardamos el mensaje y la imagen de error para pasárselos a la vista
    $tituloEnCurso = "ERROR: ".$error;
    $imagenEnCurso = "webroot/icons/sorry.jpg";
}


if (isset($_REQUEST['Aceptar'])) { //si se ha enviado una fecha
    //llamamos al servicio y le pasamos la fecha introducida por el usuario
    $ValoresActor = REST::actorBB($_REQUEST['numero']);
} else {
    $ValoresActor = null;
}
if (is_null($ValoresActor)) {
    $nombrePersonaje = null;
    $cumpleaños = null;
    $imagen = null;
    $estado = null;
    $apodo = null;
    $actor = null;
    $categoria = null;
    
} else {
    $nombrePersonaje = $ValoresActor[0]['name'];
    $cumpleaños = $ValoresActor[0]['birthday'];
    $imagen = $ValoresActor[0]['img'];
    $estado = $ValoresActor[0]['status'];
    $apodo = $ValoresActor[0]['nickname'];
    $actor = $ValoresActor[0]['portrayed'];
    $categoria = $ValoresActor[0]['category'];
}

//var_dump($ValoresActor);

$vistaEnCurso = $vistas['restPag']; //variable que contiene la vista que va a ejecutarse
require_once $vistas['layout']; //llamamos al layout