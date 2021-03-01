<?php

if (!isset($_COOKIE['idioma'])) {
    setcookie('idioma', 'es', time() + 2592000); // crea la cookie 'idioma' con el valor 'es' para 30 dias
    header('Location: index.php');
    exit;
}
if (isset($_REQUEST['idiomaElegido'])) { // si se ha pulsado el botton de idiomaElegido
    setcookie('idioma', $_REQUEST['idiomaElegido'], time() + 2592000); // modifica la cookie 'idioma' con el valor recibido del formulario para 30 dias
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