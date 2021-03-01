<?php

/**
 * Class DepartamentoPDO
 *
 * Clase cuyos métodos se encargan de realizar consultas a la tabla T_02Departamento de la base de datos.
 * 
 * @author Nerea Álvarez Justel <nerea.alvjus@educa.jcyl.es>
 * @since 1.0 Version 
 * @copyright Copyright (c) 2020 - 2021, Nerea Álvarez Justel
 * @version 1.4
 */
class DepartamentoPDO {

    public static function borrarDepartamento($codigo) {
        $borrado = false;
        $consulta = "DELETE FROM T02_Departamento WHERE T02_CodDepartamento=?";
        $resultado = DBPDO::ejecutaConsulta($consulta, [$codigo]);

        if ($resultado) {
            $borrado = true;
        }
        return $borrado;
    }

    public static function obtenerDepartamento($codigo) {
        $consulta = "SELECT * FROM T02_Departamento WHERE T02_CodDepartamento=?";
        $resultado = DBPDO::ejecutaConsulta($consulta, [$codigo]);

        if ($resultado->rowCount() > 0) {
            $oDepartamento = $resultado->fetchObject();
        }
        return $oDepartamento;
    }

    public static function modificarDepartamento($volumen, $descripcion, $codigo) {
        $departamentoModificado = false; // declaramos e inicializamos $departamentoModificado a false

        $sentenciaSQL = "UPDATE T02_Departamento SET T02_DescDepartamento=?, T02_VolumenNegocio=? WHERE T02_CodDepartamento=?";
        $resultadoConsulta = DBPDO::ejecutaConsulta($sentenciaSQL, [$descripcion, $volumen, $codigo]); // almacenamos en la variable $resultadoConsulta el resultado obtenido al ejecutar la consulta

        if ($resultadoConsulta) { // si la consulta se ha ejecutado correctamente
            $departamentoModificado = true; // cambiamos el valor de la variable $departamentoModificado a true
        }

        return $departamentoModificado;
    }

    public static function busquedaDepartamento($busqueda) {

        $consulta = "SELECT * FROM T02_Departamento WHERE T02_DescDepartamento LIKE CONCAT('%', ?, '%')";
        $resultado = DBPDO::ejecutaConsulta($consulta, [$busqueda]);

        if ($resultado->rowCount() > 0) {
            $departamento = $resultado->fetchObject();
            $numDepartamento = 0; // declaramos e inicializamos el numero del departamento del array equivalente a la posicion del array

            while ($departamento) { // mientras haya algun departamento
                // Instanciamos un objeto Departamento con los datos devueltos por la consulta
                $oDepartamento = new Departamento($departamento->T02_CodDepartamento, $departamento->T02_DescDepartamento, $departamento->T02_FechaCreacionDepartamento, $departamento->T02_VolumenNegocio, $departamento->T02_FechaBajaDepartamento);
                $aDepartamentos[$numDepartamento] = $oDepartamento; // añadimos el objeto departamento en la posicion del array correspondiente
                $numDepartamento++; // incrementamos el numero del departamento equivalente a la posicion el array
                $departamento = $resultado->fetchObject(); // almacenamos el siguiente departamento devuelto por la consulta y avanzamos el puntero al siguiente departamento
            }
        }
        return $aDepartamentos;
    }

    public static function validarDepNoExiste($codDepartamento) {
        $departamentoNoExiste = true; // inicializo la variable booleana a true
        // comprueba que el usuario introducido existen en la base de datos
        $consulta = "Select * from T02_Departamento where T02_CodDepartamento=?";
        $resultado = DBPDO::ejecutaConsulta($consulta, [$codDepartamento]); // guardo en la variabnle resultado el resultado que me devuelve la funcion que ejecuta la consulta con los paramtros pasados por parmetro

        if ($resultado->rowCount() > 0) { // si la consulta me devuleve algun resultado
            $departamentoNoExiste = false; // inicializo la variable booleana a false
        }

        return $departamentoNoExiste;
    }

    public static function insertarDepartamento($codigo, $descripcion, $volumen) {
        $alta = false;

        $consulta = "Insert into T02_Departamento (T02_CodDepartamento, T02_DescDepartamento, T02_VolumenNegocio, T02_FechaCreacionDepartamento) values (?,?,?,?)";
        $resultado = DBPDO::ejecutaConsulta($consulta, [$codigo, $descripcion, $volumen, time()]);

        if ($resultado) {
            $alta = true;
        }

        return $alta;
    }

}