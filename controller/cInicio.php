<?php

if (!isset($_SESSION['usuarioDAW212LoginLogoffMulticapaPOO'])) { // si no se ha logueado le usuario
    header('Location: index.php'); // redirige al login
    exit;
}

if (isset($_REQUEST['cerrarSesion'])) { // si se ha pulsado el boton de Cerrar Sesion
    session_destroy(); // destruye todos los datos asociados a la sesion
    header("Location: index.php"); // redirige al login
    exit;
}
if (isset($_REQUEST['editProfile'])) { // si se ha pulsado el boton de Editar Perfil
    $_SESSION['paginaEnCurso'] = $controladores['editProfile'];
    header("Location: index.php"); // redirige al login
    exit;
}

if (isset($_REQUEST['deleteAccount'])) { // si se ha pulsado el boton de Borrar Cuenta
    $_SESSION['paginaEnCurso'] = $controladores['deleteAccount'];
    header("Location: index.php"); // redirige al login
    exit;
}

if (isset($_REQUEST['restPag'])) { // si se ha pulsado el boton de REST
    $_SESSION['paginaEnCurso'] = $controladores['restPag'];
    header("Location: index.php"); // redirige al login
    exit;
}

if (isset($_REQUEST['mtoDepartamentos'])) { // si se ha pulsado el boton de DEPARTAMENTOS
    $_SESSION['paginaEnCurso'] = $controladores['mtoDepartamentos'];
    header("Location: index.php"); // redirige al login
    exit;
}

//Muestra de los valores
$usuarioActual = $_SESSION['usuarioDAW212LoginLogoffMulticapaPOO'];
$CodUser = $usuarioActual->getCodUsuario();
$DescUser = $usuarioActual->getDescUsuario();
$Profile = $usuarioActual->getPerfil();
$ConexNumber = $usuarioActual->getNumConexiones();
if($ConexNumber > 1){
    $LastDateConex = date('d/m/Y H:i:s', $usuarioActual->getFechaHoraUltimaConexion());
}else{
    $LastDateConex = null;
}

$vistaEnCurso = $vistas['inicio']; // guardamos en la variable vistaEnCurso la vista que queremos implementar
require_once $vistas['layout']; //se incluye la vista que contiene la $vistaEnCurso

?>