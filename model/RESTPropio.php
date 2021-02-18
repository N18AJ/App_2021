<?php
/**
 * Class RESTPropio.php
 *
 * Clase que será utilizada para ofrecer servicios REST
 * 
 * @author Nerea Álvarez Justel <nerea.alvjus@educa.jcyl.es>
 * @since 1.0 Version 
 * @copyright Copyright (c) 2020 - 2021, Nerea Álvarez Justel
 * @version 1.4
 */
class RESTPropio {
   
    /**
     * Llama al servicio API REST, que nos realiza un cambio de Decimal a Binario
     * 
     * @param int $number nos devolvera la información del número.
     * @return int devuelve el cambio del número. 
     */
    public static function decimalBinario($number) {
        return json_decode(file_get_contents("https://daw212.ieslossauces.es/proyectoDWES/proyectoTema6/App2021/api/decBin.php?number=$number"), true);        
    }  
}