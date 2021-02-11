<?php
require_once "core/libreriaValidacion.php";

require_once "model/Usuario.php";
require_once "model/UsuarioPDO.php";
require_once "model/DBPDO.php";
require_once "model/REST.php";
require_once "model/RESTPropio.php";

//Referencia para la vista
$controladores = [
    "home" => "controller/cPaginaPrincipal.php",
    "login" => "controller/cLogin.php",
    "inicio" => "controller/cInicio.php",
    "registro" => "controller/cRegistro.php",
    "editProfile" => "controller/cMiCuenta.php",
    "deleteAccount" => "controller/cBorrarCuenta.php",
    "restPag" => "controller/cREST.php",
    "changePassw" => "controller/cPassword.php"
    
];

$vistas = [
    "layout" => "view/layout.php",
    "home" => "view/vPaginaPrincipal.php",
    "login" => "view/vLogin.php",
    "inicio" => "view/vInicio.php",
    "registro" => "view/vRegistro.php",
    "editProfile" => "view/vMiCuenta.php",
    "deleteAccount" => "view/vBorrarCuenta.php",
    "restPag" => "view/vREST.php",
    "changePassw" => "view/vPassword.php"
];

?>