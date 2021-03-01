<?php

$oUsuarioActual = $_SESSION['usuarioDAW212LoginLogoffMulticapaPOO']; // almacenamos en la variable el usuario actual

if (isset($_REQUEST['inicio'])) {
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del login
    header('Location: index.php');
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


$oDepartamento = DepartamentoPDO::obtenerDepartamento($_SESSION['codDepartamento']);
$CodDep = $_SESSION['codDepartamento'];
$DescDep = $oDepartamento->T02_DescDepartamento;
if (!is_null($oDepartamento->T02_FechaBajaDepartamento)) {
    $FechaBaja = date('d/m/Y', $oDepartamento->T02_FechaBajaDepartamento);
}
$FechaCreacion = date('d/m/Y', $oDepartamento->T02_FechaCreacionDepartamento);
$VolDep = $oDepartamento->T02_VolumenNegocio;


define("OBLIGATORIO", 1); // defino e inicializo la constante a 1 para los campos que son obligatorios

$entradaOK = true;

$aErrores = [//declaro e inicializo el array de errores
    'DescDep' => null,
    'VolDep' => null
];


if (isset($_REQUEST["Aceptar"])) { // comprueba que el usuario le ha dado a al boton de IniciarSesion y valida la entrada de todos los campos
    $aErrores['DescDep'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['DescDep'], 35, 3, OBLIGATORIO); // comprueba que la entrada del codigo de usuario es correcta
    $aErrores['VolDep'] = validacionFormularios::comprobarEntero($_REQUEST['VolDep'], PHP_INT_MAX, 1, OBLIGATORIO);

    foreach ($aErrores as $campo => $error) { // recorro el array de errores
        if ($error != null) { // compruebo si hay algun mensaje de error en algun campo
            $entradaOK = false; // le doy el valor false a $entradaOK
            $_REQUEST[$campo] = ""; // si hay algun campo que tenga mensaje de error pongo $_REQUEST a null
        }
    }
} else { // si el usuario no le ha dado al boton de enviar
    $entradaOK = false; // le doy el valor false a $entradaOK
}

if ($entradaOK && DepartamentoPDO::modificarDepartamento($_REQUEST['VolDep'], $_REQUEST['DescDep'], $_SESSION['codDepartamento'])) { // si la entrada esta bien recojo los valores introducidos y hago su tratamiento
   $_SESSION['paginaEnCurso'] = $controladores['mtoDepartamentos']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del inicio

    header('Location: index.php'); // redirige al index.php
    exit;
}

$vistaEnCurso = $vistas['modificarDepartamento']; // guardamos en la variable vistaEnCurso la vista que queremos implementar
require_once $vistas['layout'];

?>