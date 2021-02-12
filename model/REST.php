<?php
/**
 * @author Nerea Álvarez Justel
 * @since 28/01/2021
 * @version 11/02/2021
 */
class REST {
    /**
     * Llama al servicio API REST APOD(Astronomy Picture of the Day), que nos devuelve la imagen atronómica del
     * día e información relativa a esta.
     * 
     * @param type $fecha la fecha que le vamos a pasar al servicio para que busque una imagen.
     * @return type array que contiene información sobre la imagen astronómica del día. 
     */
    public static function sevicioAPOD($fecha) {
        //llamamos al servicio, pasándole la fecha al campo date, y decodificamos el json que nos devuelve
        return json_decode(file_get_contents("https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY&date=$fecha"), true);        
    }
    
    /**
     * Llama al servicio API REST, que nos devuelve la informacion de un personaje
     * de la serie Breaking Bad.
     * 
     * @param type $number nos devolvera la información de un personaje.
     * @return type array que contiene información sobre el personaje. 
     */
    public static function actorBB($number) {
        return json_decode(file_get_contents("https://www.breakingbadapi.com/api/characters/$number"), true);        
    }
    
    /**
     * Llama al servicio API REST, que nos realiza un cambio de minúsculas a MAYÚSCULAS
     * 
     * @param type $cadena nos devolvera la información de la cadena.
     * @return type devuelve el cambio de la cadena. 
     */
    public static function mayusculas($cadena) {
        return json_decode(file_get_contents("https://daw218.ieslossauces.es/proyectoDWES/AplicacionFinal2021/api/aMayusculas.php?cadena=$cadena"), true);
    }
}