<?php

/**
 * @author: Nerea Álvarez Justel
 * @since: 27/01/2020
 * 
 * cPaginsPrincipal
 * 
 * Llegaremos iniciando
 * 
 * login nos lleva a cLogin
 * 
 */
if (!isset($_COOKIE['idioma'])) {
    setcookie('idioma', 'es', time() + 2592000); // crea la cookie 'idioma' con el valor 'es' para 30 dias
    header('Location: index.php');
    exit;
}
if (isset($_REQUEST['Entrada'])) { // si se ha pulsado el boton de REST
    $_SESSION['paginaEnCurso'] = $controladores['login'];
    header("Location: index.php"); // redirige al login
    exit;
}

$vistaEnCurso = $vistas['home']; // guardamos en la variable vistaEnCurso la vista que queremos implementar
require_once $vistas['layout']; //se incluye la vista que contiene la $vistaEnCurso

?>