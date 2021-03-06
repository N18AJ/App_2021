<?php

/**
 * Class UsuarioPDO
 *
 * Clase cuyos métodos se encargan de realizar consultas a la tabla T_01Usuario de la base de datos.
 * 
 * @author Nerea Álvarez Justel <nerea.alvjus@educa.jcyl.es>
 * @since 1.0 Version 
 * @copyright Copyright (c) 2020 - 2021, Nerea Álvarez Justel
 * @version 1.4
 */
class UsuarioPDO {

    /**
     * Metodo validarUsuario()
     * 
     * Metodo que valida si existe un determinado usuario y password en la base de datos.
     * Si existe el usuario actualiza la ultima conexion y el numero de conexiones de ese usuario y lo devuelve.
     * Si no existe el usuario devuelve null.
     * 
     * @param string $codUsuario codigo del usuario
     * @param string $password password del usuario
     * @return mixed[] Si existe, un array con un objeto de tipo Usuario con los datos de la base de datos y la fechaHoraUltimaConexionAnterior. Si no existe null.
     */
    public static function validarUsuario($codUsuario, $password){
        $oUsuario = null; // inicializo la variable que tendrá el objeto de clase ususario en el casod e que se encuentre en la base de datos
        
        // comprueba que el usuario y el password introducido existen en la base de datos
        $consulta = "Select * from T01_Usuario where T01_CodUsuario=? and T01_Password=?";
        $passwordEncriptado = hash("sha256", ($codUsuario.$password)); // enctripta el password pasado como parametro
        $resultado = DBPDO::ejecutaConsulta($consulta, [$codUsuario,$passwordEncriptado]); // guardo en la variabnle resultado el resultado que me devuelve la funcion que ejecuta la consulta con los paramtros pasados por parmetro
        
        if($resultado->rowCount()>0){ // si la consulta me devuleve algun resultado
            $oUsuarioConsulta = $resultado->fetchObject(); // guardo en la variable el resultado de la consulta en forma de objeto
            
            
            // actualiza la ultima fecha de conecion
            $consultaActualizacionFechaConexion = "Update T01_Usuario set T01_NumConexiones = T01_NumConexiones+1, T01_FechaHoraUltimaConexion=? where T01_CodUsuario=?";
            $resultadoActualizacionFechaConexion = DBPDO::ejecutaConsulta($consultaActualizacionFechaConexion, [time(),$codUsuario]);
            
            if($resultadoActualizacionFechaConexion){
                // instanciacion de un objeto Usuario con los datos del usuario
                $oUsuario = new Usuario($oUsuarioConsulta->T01_CodUsuario, $oUsuarioConsulta->T01_Password, $oUsuarioConsulta->T01_DescUsuario, $oUsuarioConsulta->T01_NumConexiones+1, $oUsuarioConsulta->T01_FechaHoraUltimaConexion, $oUsuarioConsulta->T01_Perfil, $oUsuarioConsulta->T01_ImagenUsuario);
            }
        }
        
        return $oUsuario;
    }
    
  
    /**
     * Método obtenerUltimaConexion()
     * 
     * Da la fecha de la última conexión
     * 
     * @access public
     * @param string $codUsuario Código del usuario
     * @return Usuario Objeto Usuario modificado.
     */
    public static function obtenerUltimaConexion($codUsuario) {
        $fecha = null;
        $consulta = "SELECT T01_FechaHoraUltimaConexion FROM T01_Usuario WHERE T01_CodUsuario=?";
        $resultado = DBPDO::ejecutaConsulta($consulta, [$codUsuario]);
        if ($resultado->rowCount() > 0) {
            $oUsuarioConsulta = $resultado->fetchObject();
            $fecha = $oUsuarioConsulta->T01_FechaHoraUltimaConexion;
        }
        return $fecha;
    }
    

    /**
     * Método borrarUsuario()
     * 
     * Borra el usuario
     * 
     * @access public
     * @param string $codUsuario Código del usuario
     */
    public static function borrarUsuario($codUsuario) {
        $consulta = "DELETE FROM T01_Usuario WHERE T01_CodUsuario=?";
        DBPDO::ejecutaConsulta($consulta, [$codUsuario]);
    }

    /**
     * Método editarUsuario()
     * 
     * Modifica la descripción de un usuario.
     * 
     * @access public
     * @param string $codUsuario Código del usuario
     * @param string $descripcion Descripción del usuario 
     * @return Usuario Objeto Usuario modificado.
     */
    public static function editarUsuario($codUsuario, $descripcion) {
        $consulta = "Update T01_Usuario set T01_DescUsuario=? where T01_CodUsuario=?";
        $resultado = DBPDO::ejecutaConsulta($consulta, [$descripcion, $codUsuario]);

        $consultaDatosUsuario = "Select * from T01_Usuario where T01_CodUsuario=?";
        $resultadoDatosUsuario = DBPDO::ejecutaConsulta($consultaDatosUsuario, [$codUsuario]); // guardo en la variabnle resultado el resultado que me devuelve la funcion que ejecuta la consulta con los paramtros pasados por parmetro

        if ($resultadoDatosUsuario->rowCount() > 0) { // si la consulta me devuleve algun resultado
            $oUsuarioConsulta = $resultadoDatosUsuario->fetchObject(); // guardo en la variable el resultado de la consulta en forma de objeto
            // instanciacion de un objeto Usuario con los datos del usuario
            $oUsuario = new Usuario($oUsuarioConsulta->T01_CodUsuario, $oUsuarioConsulta->T01_Password, $oUsuarioConsulta->T01_DescUsuario, $oUsuarioConsulta->T01_NumConexiones, $oUsuarioConsulta->T01_FechaHoraUltimaConexion, $oUsuarioConsulta->T01_Perfil, $oUsuarioConsulta->T01_ImagenUsuario);
        }

        return $oUsuario;
    }

    /**
     * Método altaUsuario()
     * 
     * Crea un usuario nuevo.
     * 
     * @access public
     * @param string $codUsuario Código del usuario
     * @param string $password Contraseña del usuario 
     * @param string $descripcion Descripción del usuario 
     * @return Usuario Objeto Usuario nuevo.
     */
    public static function altaUsuario($codUsuario, $password, $descripcion) {
        $oUsuario = null;

        $consulta = "Insert into T01_Usuario (T01_CodUsuario, T01_DescUsuario, T01_Password , T01_NumConexiones, T01_FechaHoraUltimaConexion) values (?,?,?,1,?)";
        $passwordEncriptado = hash("sha256", ($codUsuario . $password)); // enctripta el password pasado como parametro
        $resultado = DBPDO::ejecutaConsulta($consulta, [$codUsuario, $descripcion, $passwordEncriptado, time()]);


        $consultaDatosUsuario = "Select * from T01_Usuario where T01_CodUsuario=?";
        $resultadoDatosUsuario = DBPDO::ejecutaConsulta($consultaDatosUsuario, [$codUsuario]); // guardo en la variabnle resultado el resultado que me devuelve la funcion que ejecuta la consulta con los paramtros pasados por parmetro

        if ($resultadoDatosUsuario->rowCount() > 0) { // si la consulta me devuleve algun resultado
            $oUsuarioConsulta = $resultadoDatosUsuario->fetchObject(); // guardo en la variable el resultado de la consulta en forma de objeto
            // instanciacion de un objeto Usuario con los datos del usuario
            $oUsuario = new Usuario($oUsuarioConsulta->T01_CodUsuario, $oUsuarioConsulta->T01_Password, $oUsuarioConsulta->T01_DescUsuario, $oUsuarioConsulta->T01_NumConexiones, $oUsuarioConsulta->T01_FechaHoraUltimaConexion, $oUsuarioConsulta->T01_Perfil, $oUsuarioConsulta->T01_ImagenUsuario);
        }

        return $oUsuario;
    }

    
    /**
    * Metodo cambiarPassword()
    * 
    * Metodo que cambia el password del usuario pasado como parametro
    *
    * @param  string $codUsuario codigo de usuario del usuario al que queremos cambiar el password
    * @param  string $passwordNueva nueva password que se quiere poner al usuario
    * @return null|\Usuario devuelve un objeto de tipo Usuario con los datos guardados en la base de datos y null si no se ha podido modificar el password
    */
    public static function cambiarPassword($codUsuario, $passwordNueva){
        $oUsuario = null;

        $consulta = "Update T01_Usuario set T01_Password=? where T01_CodUsuario=?";
        $passwordEncriptado = hash("sha256", $codUsuario.$passwordNueva); // encripta el password pasado como parametro
        $resultadoConsulta = DBPDO::ejecutaConsulta($consulta, [$passwordEncriptado,$codUsuario]);

        if($resultadoConsulta){
            $consultaDatosUsuario = "Select * from T01_Usuario where T01_CodUsuario=?";
            $resultadoDatosUsuario = DBPDO::ejecutaConsulta($consultaDatosUsuario, [$codUsuario]); // guardo en la variabnle resultado el resultado que me devuelve la funcion que ejecuta la consulta con los paramtros pasados por parmetro
            
            if($resultadoDatosUsuario->rowCount()>0){ // si la consulta me devuelve algun resultado
                $oUsuarioConsulta = $resultadoDatosUsuario->fetchObject(); // guardo en la variable el resultado de la consulta en forma de objeto
                // instanciacion de un objeto Usuario con los datos del usuario
                $oUsuario = new Usuario($oUsuarioConsulta->T01_CodUsuario, $oUsuarioConsulta->T01_Password, $oUsuarioConsulta->T01_DescUsuario, $oUsuarioConsulta->T01_NumConexiones, $oUsuarioConsulta->T01_FechaHoraUltimaConexion, $oUsuarioConsulta->T01_Perfil, $oUsuarioConsulta->T01_ImagenUsuario);
            }
        }

        return $oUsuario;
    }
    
    
    /**
     * Método validarCodNoExiste()
     * 
     * Valida si existe un usuario en la base de datos a través de su código.
     * 
     * @access public
     * @param string $codUsuario Código del usuario
     * @return boolean true = usuario inexistente, false = usuario existente.
     */
    public static function validarCodNoExiste($codUsuario) {
        $usuarioNoExiste = true; // inicializo la variable booleana a true
        // comprueba que el usuario introducido existen en la base de datos
        $consulta = "Select * from T01_Usuario where T01_CodUsuario=?";
        $resultado = DBPDO::ejecutaConsulta($consulta, [$codUsuario]); // guardo en la variabnle resultado el resultado que me devuelve la funcion que ejecuta la consulta con los paramtros pasados por parmetro

        if ($resultado->rowCount() > 0) { // si la consulta me devuleve algun resultado
            $usuarioNoExiste = false; // inicializo la variable booleana a false
        }

        return $usuarioNoExiste;
    }

}
