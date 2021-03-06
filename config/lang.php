<?php

if (isset($_SESSION['usuarioDAW212LoginLogoffMulticapaPOO'])) {
    $usuarioActual = $_SESSION['usuarioDAW212LoginLogoffMulticapaPOO'];
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
        'passw' => 'CONTRASEÑA',
        'passw2' => 'CONTRASEÑA NUEVA',
        'passw3' => 'REPETIR CONTRASEÑA',
        'priv1' => 'He podido leer y entiendo la información sobre el uso de mis',
        'priv2' => 'datos personales explicada en la ',
        'code' => 'CÓDIGO',
        'volume' => 'VOLUMEN',
        'creation' => 'FECHA CREACIÓN',
        'leavingdate' => 'FECHA BAJA',
        
        
        //Botones ENTRADA
        'start' => 'INICIO',
        'login' => 'INICIAR SESIÓN',
        'signup' => 'CREAR CUENTA',
        'edit' => 'EDITAR PERFIL',
        'logoff' => 'CERRAR SESIÓN',
        'delete'=> 'BORRAR CUENTA',
        'departamentos'=> 'DEPARTAMENTOS',
        'restNom'=> 'REST',
        'homeB'=> 'HOME',
        'priv' => 'Política de Privacidad',
        
        //Titulos
        'startT'=> 'INICIA SESIÓN',
        'signupT'=> 'REGÍSTRATE',
        'datailsT'=> 'DATOS PERSONALES',
        'editProfileT' => 'EDITAR PERFIL',
        'deleteT'=> 'BORRAR CUENTA',
        'restT'=> 'REST',
        'homeT'=> 'PÁGINA INICIO',
        'imagenT'=> 'IMAGENES',
        'docT'=> 'ENLACES A DOC',
      
        //Muestra INICIO
        'welcome' => 'Bienvenid@ ' . (isset($usuarioActual) ? $usuarioActual->getDescUsuario() : null),
        //'welcome' => 'Bienvenid@ ',
        //'person' => (isset($usuarioActual) ? $usuarioActual->getDescUsuario() : null),
        'numConnections' => 'Usted se ha conectado ' . (isset($usuarioActual) ? $usuarioActual->getNumConexiones() : null) . ' veces',
        'numConnectionsWelcome' => 'Esta es la primera vez que se conecta',
        'lastConnection' => 'Esta es la hora de su última conexión: ' . (isset($usuarioActual) ? date('d/m/Y H:i:s', $usuarioActual->getFechaHoraUltimaConexion()) : null),
        
        //Botones movimiento
        'acceptB'=>'ACEPTAR',
        'editB'=>'ACTUALIZAR DATOS PERSONALES',
        'deleteB'=>'BORRAR',
        'cancelB' => 'CANCELAR',
        'returnB'=>'VOLVER',
        'changePasswB'=>'CAMBIAR CONTRASEÑA',
        'searchB'=>'BUSCAR',
        'addB'=>'AÑADIR',
        'mayB'=>'MAYÚSCULAS',
        'binB'=>'BINARIO'
        
        
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
        'passw' => 'CONTRASEÑA',
        'passw2' => 'PASSWORD NEW',
        'passw3' => 'REPET PASSWORD',
        'priv1' => 'I have been able to read and understand the information about the use of my',
        'priv2' => 'personal data explained in the ',
        'code' => 'CODE',
        'volume' => 'VOLUME',
        'creation' => 'CREATION DATE',
        'leavingdate' => 'LEAVING DATE',
        
        //Botones ENTRADA
        'start' => 'START',
        'login' => 'LOGIN',
        'signup' => 'SIGN UP',
        'edit' => 'EDIT',
        'logoff' => 'LOG OUT',
        'delete'=> 'DELETE ACCOUNT',
        'restNom'=> 'REST',
        'homeB'=> 'HOME',
        'priv' => 'Privacy Policy',
        
        //Titulos
        'startT'=> 'START',
        'signupT'=> 'REGISTRATION',
        'editProfileT' => 'EDIT PROFILE',
        'deleteT'=> 'DELETE ACCOUNT',
        'departamentos'=> 'SHOP',
        'restT'=> 'REST',
        'homeT'=> 'HOMEPAGE',
        'imagenT'=> 'IMAGENES',
        'docT'=> 'LINK  DOC',
        
        //Muestra INICIO
        'welcome' => 'Welcome ' . (isset($usuarioActual) ? $usuarioActual->getDescUsuario() : null),
        //'welcome' => 'Welcome ',
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
        'changeB'=>'CHANGE',
        'changePassw'=>'CHANGE PASSWORD',
        'searchB'=>'SEARCH',
        'addB'=>'ADD',
        'mayB'=>'CAPITAL',
        'binB'=>'BINARY'
    ]
];
?>