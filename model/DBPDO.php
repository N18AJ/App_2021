<?php

/**
 * Class DBPDO
 *
 * Clase cuyo método permite establecer una conexión con la base de datos y realizarle consultas.
 * 
 * @author Nerea Álvarez Justel <nerea.alvjus@educa.jcyl.es>
 * @since Version 1.0
 * @copyright Copyright (c) 2020 - 2021, Nerea Álvarez Justel
 * @version 1.4
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
     * @return null|PDOStatement resultado que devolverá la consulta
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
