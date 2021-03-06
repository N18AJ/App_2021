<?php

if (isset($_REQUEST['inicio'])) {
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del login
    header('Location: index.php');
    exit;
}
if (isset($_REQUEST['editProfile'])) { // si se ha pulsado el boton de Editar Perfil
    $_SESSION['paginaEnCurso'] = $controladores['editProfile'];
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

if (isset($_REQUEST['cerrarSesion'])) { // si se ha pulsado el boton de Cerrar Sesion
    session_destroy(); // destruye todos los datos asociados a la sesion
    header("Location: index.php"); // redirige al login
    exit;
}

//Muestra de los valores
$usuarioActual = $_SESSION['usuarioDAW212LoginLogoffMulticapaPOO'];
$CodUser = $usuarioActual->getCodUsuario();
$DescUser = $usuarioActual->getDescUsuario();
$Profile = $usuarioActual->getPerfil();
$ConexNumber = $usuarioActual->getNumConexiones();
$LastDateConex = date('d/m/Y H:i:s', $usuarioActual->getFechaHoraUltimaConexion());

if (isset($_REQUEST["Aceptar"])) { // comprueba que el usuario le ha dado a al boton de IniciarSesion y valida la entrada de todos los campos
    UsuarioPDO::borrarUsuario($CodUser); //Llamada
    session_destroy();//Destruimos la sesion
    $_SESSION['paginaEnCurso'] = $controladores['login']; // volvemos a la pagina de login

    header('Location: index.php'); // redirige al index.php
    exit;
}

$vistaEnCurso = $vistas['deleteAccount']; // guardamos en la variable vistaEnCurso la vista que queremos implementar
require_once $vistas['layout'];//se incluye la vista que contiene la $vistaEnCurso

?>