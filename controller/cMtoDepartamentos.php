<?php
if (isset($_REQUEST['inicio'])) {
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del login
    header('Location: index.php');
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

if (isset($_REQUEST['buscar'])) {
    $descripcionBuscada = $_REQUEST['descripcion'];
} else {
    $descripcionBuscada = "";
}
$arrayDepartamentos = DepartamentoPDO::busquedaDepartamento($descripcionBuscada);

if (isset($_REQUEST['insertar'])) {
    $_SESSION['paginaEnCurso'] = $controladores['altaDepartamento']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}

if (isset($_REQUEST['modificarDepartamento'])) { // si se ha pulsado el botón de editar perfil
    $_SESSION['codDepartamento'] = $_REQUEST['modificarDepartamento'];
    $_SESSION['paginaEnCurso'] = $controladores['modificarDepartamento']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}
if (isset($_REQUEST['eliminarDepartamento'])) { // si se ha pulsado el botón de editar perfil
    $_SESSION['codDepartamento'] = $_REQUEST['eliminarDepartamento'];
    $_SESSION['paginaEnCurso'] = $controladores['eliminarDepartamento']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}

$vistaEnCurso = $vistas['mtoDepartamentos']; // guardamos en la variable vistaEnCurso la vista que queremos implementar
require_once $vistas['layout'];

?>