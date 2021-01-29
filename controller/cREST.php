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
if(isset($_REQUEST['Enviar'])) { //si se ha enviado una fecha
    //llamamos al servicio y le pasamos la fecha introducida por el usuario
    $aServicioAPOD = REST::sevicioAPOD($_REQUEST['fecha']);
}
else {
    //llamamos al servicio y le pasamos la fecha de hoy
    $aServicioAPOD = REST::sevicioAPOD(date('Y-m-d'));
}
$tituloEnCurso = $aServicioAPOD['title'];
$imagenEnCurso = $aServicioAPOD['url'];
$descripcionEnCurso = $aServicioAPOD['explanation'];



if (isset($_REQUEST['Aceptar'])) { //si se ha enviado una fecha
    //llamamos al servicio y le pasamos la fecha introducida por el usuario
    $ValoresActor = REST::actorBB($_REQUEST['numero']);
} else {
    $ValoresActor = null;
}
if (is_null($ValoresActor)) {
    $nombrePersonaje = "Sin petición";
    $cumpleaños = null;
    $ocupacion = null;
    $imagen = null;
    $estado = null;
    $apodo = null;
    $aparicion = null;
    $actor = null;
    $categoria = null;
    
} else {
    $nombrePersonaje = $ValoresActor['name'];
    $cumpleaños = $ValoresActor['birthday'];
    $ocupacion = $ValoresActor['occupation'];
    $imagen = $ValoresActor['img'];
    $estado = $ValoresActor['status'];
    $apodo = $ValoresActor['nickname'];
    $aparicion = $ValoresActor['appearance'];
    $actor = $ValoresActor['portrayed'];
    $categoria = $ValoresActor['category'];
}

var_dump($ValoresActor);

$vistaEnCurso = $vistas['restPag']; //variable que contiene la vista que va a ejecutarse
require_once $vistas['layout']; //llamamos al layout