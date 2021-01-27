<?php

/**
 * @author: Nerea Álvarez Justel
 * @since: 24/01/2020
 * 
 * cBorrarCuenta
 * 
 * Llegaremos desde cInicio
 * 
 * Aceptar nos lleva a cLogin
 * 
 * Cancelar nos lleva a cInicio
 * 
 */

//Muestra de los valores
$usuarioActual = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'];
$CodUser = $usuarioActual->getCodUsuario();
$DescUser = $usuarioActual->getDescUsuario();
$Profile = $usuarioActual->getPerfil();
$ConexNumber = $usuarioActual->getNumConexiones();
$LastDateConex = date('d/m/Y H:i:s', $usuarioActual->getFechaHoraUltimaConexion());

if (isset($_REQUEST['Cancelar'])) {
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del login
    header('Location: index.php');
    exit;
}

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