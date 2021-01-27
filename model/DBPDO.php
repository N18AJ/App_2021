<?php

/**
 * Class DBPDO
 *
 * Clase cuyo método permite establecer una conexión con la base de datos y realizarle consultas.
 * 
 * @author Nerea Álvarez Justel
 * @since Version 1.0
 * @copyright 24-01-2021
 * @version 1.0
 */
class DBPDO {

    /**
     * Método ejecutaConsulta()
     * 
     * Ejecuta una consulta a la base de datos indicada en configDB.
     * 
     * @access public
     * @param $sentenciaSQL Código SQL 
     * @param $parametros Datos necesarios para realizar la consulta e insertado en el código SQL.
     * @return consulta La suma de todos los argumentos
     */
    public static function ejecutaConsulta($sentenciaSQL, $parametros) {
        try {
            $miDB = new PDO(DNS, USER, PASSWORD);
            $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $consulta = $miDB->prepare($sentenciaSQL); //Preparamos la consulta.
            $consulta->execute($parametros); //Ejecutamos la consulta.
        } catch (PDOException $exception) {
            $consulta = null; //Destruimos la consulta.
            echo $exception->getMessage();
            unset($miDB);
        }
        return $consulta;
    }

}
