<?php

if (isset($_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'])) {
    $usuarioActual = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'];
}

$aLang = [
    //Idioma en ESPAÑOL
    'es' => [
        //Muestra de información
        'user' => 'USUARIO',
        'description' => 'DESCRIPCIÓN',
        'password' => 'CONTRASEÑA',
        'confirmPassword' => 'REPETIR CONTRASEÑA',
        'NumConex' => 'NÚMERO DE CONEXIONES',
        'DateLastConex' => 'FECHA ÚLTIMA CONEXIÓN',
        'typeUser' => 'PERFIL USUARIO',
        
        //Botones ENTRADA
        'login' => 'INICIAR SESIÓN',
        'signup' => 'CREAR CUENTA',
        'edit' => 'EDITAR PERFIL',
        'logoff' => 'CERRAR SESIÓN',
        'delete'=> 'BORRAR CUENTA',
        'restNom'=> 'REST',
        
        //Titulos
        'startT'=> 'INICIA SESIÓN',
        'signupT'=> 'REGÍSTRATE',
        'datailsT'=> 'DATOS PERSONALES',
        'editProfileT' => 'EDITAR PERFIL',
        'deleteT'=> 'BORRAR CUENTA',
        'restT'=> 'REST',
        
        //Muestra INICIO
        //'welcome' => 'Bienvenid@ ' . (isset($usuarioActual) ? $usuarioActual->getDescUsuario() : null),
        'welcome' => 'Bienvenid@ ',
        'person' => (isset($usuarioActual) ? $usuarioActual->getDescUsuario() : null),
        'numConnections' => 'Se ha conectado ' . (isset($usuarioActual) ? $usuarioActual->getNumConexiones() : null) . ' veces',
        'numConnectionsWelcome' => 'Esta es la primera vez que se conecta',
        //'connectionNow' => ,
        'lastConnection' => 'Última conexión: ' . (isset($usuarioActual) ? date('d/m/Y H:i:s', $usuarioActual->getFechaHoraUltimaConexion()) : null),
        
        //Botones movimiento
        'acceptB'=>'ACEPTAR',
        'editB'=>'ACTUALIZAR DATOS PERSONALES',
        'deleteB'=>'BORRAR',
        'cancelB' => 'CANCELAR',
        'returnB'=>'VOLVER',
        'changeB'=>'CAMBIAR'
        
    ],
    //Idioma en INGLÉS
    'en' => [
        //Muestra de información
        'user' => 'USER',
        'description' => 'DESCRIPTION',
        'password' => 'PASSWORD',
        'confirmPassword' => 'REPEAT PASSWORD',
        'NumConex' => 'NUMBER OF CONNECTIONS',
        'DateLastConex' => 'DATE LAST CONNECTION',
        'typeUser' => 'TYPE OF USER',
        
        //Botones ENTRADA
        'login' => 'LOGIN',
        'signup' => 'SIGN UP',
        'edit' => 'EDIT',
        'logoff' => 'LOG OUT',
        'delete'=> 'DELETE ACCOUNT',
        'restNom'=> 'REST',
        
        //Titulos
        'startT'=> 'START',
        'signupT'=> 'REGISTRATION',
        'editProfileT' => 'EDIT PROFILE',
        'deleteT'=> 'DELETE ACCOUNT',
        'restT'=> 'REST',
        
        //Muestra INICIO
        //'welcome' => 'Welcome ' . (isset($usuarioActual) ? $usuarioActual->getDescUsuario() : null),
        'welcome' => 'Welcome ',
        'person' => (isset($usuarioActual) ? $usuarioActual->getDescUsuario() : null),
        'numConnections' => 'You have connected ' . (isset($usuarioActual) ? $usuarioActual->getNumConexiones() : null) . ' times',
        'numConnectionsWelcome' => 'This is the first time you connect',
        'lastConnection' => 'Last connection: ' . (isset($usuarioActual) ? date('d/m/Y H:i:s', $usuarioActual->getFechaHoraUltimaConexion()) : null),
        
        //Botones movimiento
        'acceptB'=>'ACEEPT',
        'editB'=>'UPDATE PERSONAL DETAILS',
        'deleteB'=>'DELETE',
        'cancelB' => 'CANCEL',
        'returnB'=>'RETURN',
        'changeB'=>'CHANGE'
    ]
];
?>