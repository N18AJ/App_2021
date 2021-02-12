<?php
/**
 * @author Nerea Álvarez Justel
 * @since 10/02/2021
 * @version 11/02/2021
 */
class RESTPropio {
   
    /**
     * Llama al servicio API REST, que nos realiza un cambio de Decimal a Binario
     * 
     * @param type $number nos devolvera la información de la cadena.
     * @return type devuelve el cambio de la cadena. 
     */
    public static function decimalBinario($number) {
        return json_decode(file_get_contents("https://daw212.ieslossauces.es/proyectoDWES/proyectoTema6/App2021/api/decBin.php?number=$number"), true);        
    }  
}