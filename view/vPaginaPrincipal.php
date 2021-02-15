<header id="header" ></header>
<form class="botones" name="formularioIdioma" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <button class="button" id="homeB" type="submit" name="Entrada"><?php echo $aLang[$_COOKIE['idioma']]['login']; ?></button>   
    <button <?php echo ($_COOKIE['idioma'] == "es") ? "style='font-weight: bold;'" : null; ?> class="idioma" type="submit" name="idiomaElegido" value="es" >ESPAÑOL</button>
    <button <?php echo ($_COOKIE['idioma'] == "en") ? "style='font-weight: bold;'" : null; ?> class="idioma" type="submit" name="idiomaElegido" value="en" >ENGLISH</button>
</form>
<header class="titulo">
    <h1><?php echo $aLang[$_COOKIE['idioma']]['homeT']; ?></h1> <!-- peticion del titulo-->
</header>
<main>


    <div id="homeIzq">
        <div class="carousel">
            <h1 style="margin-right: 50px;"><?php echo $aLang[$_COOKIE['idioma']]['imagenT']; ?></h1> <!-- peticion del titulo-->
            <button id="retroceder" class="visual"><</button>
            <div id="imagen"></div>
            <button id="avanzar" class="visual">></button> 
        </div>

        <div class="controles">
            <button id="play">Play</button>
            <button id="stop" disabled>Stop</button>
        </div>

        <img src="webroot/media/images/num1_1.jpg" style="display: none">
        <img src="webroot/media/images/num1_2.jpg" style="display: none">
        <img src="webroot/media/images/num1_3.jpg" style="display: none">
        <img src="webroot/media/images/num1_4.jpg" style="display: none">
        <img src="webroot/media/images/num1_5.jpg" style="display: none">
        <img src="webroot/media/images/num2.jpg" style="display: none">
        <img src="webroot/media/images/num3.jpg" style="display: none">
        <img src="webroot/media/images/num4.jpg" style="display: none">
        <img src="webroot/media/images/num5.jpg" style="display: none">
        <img src="webroot/media/images/num6.JPG" style="display: none">
        <img src="webroot/media/images/num7.jpg" style="display: none">

    </div>
    
    <div id="homeDec">
        <h1 style="margin-left: 25%;"><?php echo $aLang[$_COOKIE['idioma']]['docT']; ?></h1> <!-- peticion del titulo-->
        <a href="doc/num1.pdf" target="_blank"><p>Catálogo de Requisitos</p></a>
        <a href="doc/num2.pdf" target="_blank"><p>Diagrama de Casos de Usos</p></a>
        <a href="doc/num3.pdf" target="_blank"><p>Diagrama de Clases</p></a>
        <a href="doc/num4.pdf" target="_blank"><p>Árbol de navegación</p></a>
        <a href="doc/num5.pdf" target="_blank"><p>Mapa Web Relación de Ficheros</p></a>
        <a href="webroot/media/images/num6.JPG" target="_blank"><p>Estructura de Almacenamiento</p></a>
        <a href="doc/num7.pdf" target="_blank"><p>Modelo Fisico de Datos</p></a>       
    </div>
    
</main>