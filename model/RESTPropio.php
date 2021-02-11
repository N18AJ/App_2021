<?php
/**
 * @author Nerea Álvarez Justel
 * @since 28/01/2021
 * @version 28/01/2021
 */
class RESTPropio {
   
    public static function decimalBinario($number) {
        return json_decode(file_get_contents("https://daw212.ieslossauces.es/proyectoDWES/proyectoTema6/App2021/api/decBin.php?number=$number"), true);        
    }  
}