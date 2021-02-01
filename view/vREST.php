<header class="titulo">
    <h1><?php echo $aLang[$_COOKIE['idioma']]['restT']; ?></h1> <!-- peticion del titulo-->
</header>
<main>
<div id="loginIzq" style="text-align: center;">
    <h2>Aplicación resumen Susana 20-21</h2>
    <div id="servicio-rest">
        <div id="apodService" style="display: <?php echo $apodDisplay ?>">
            <p><?php echo $aServicioAPOD['title'] ?></p>
            <img src="<?php echo $aServicioAPOD['url'] ?>" width="100">
            <p><?php echo $aServicioAPOD['explanation'] ?></p>
        </div>
    </div>
    <div id="apodForm" style="display: <?php echo $apodDisplay ?>">
        <p>Puedes seleccionar una fecha para ver su imagen</p>
        <form name="rest" id="rest" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <p>
                <input type="date" name="fecha" max="<?php echo date('Y-m-d') ?>" value="<?php echo date('Y-m-d') ?>">
            </p>
            <div>
                <input class="button"  type="submit" value="Enviar" name="enviar">
            </div>
        </form>
    </div>
</div>   

<div id="loginDec" style="margin-bottom: 50px;">
    <form style="text-align: center;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h2 style="font-size:22pt">Breaking Bad</h2>
        <div>
            <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Nombre del actor: </span> <?php echo $nombrePersonaje?></p>
            <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Fecha cumpleaños: </span> <?php echo $cumpleaños ?></p>
            <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Imagen: </span> <?php echo $imagen ?></p>
            <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Estado del personaje: </span> <?php echo $estado ?></p>
            <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Apodo del pesonaje: </span> <?php echo $apodo ?></p>
            <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Actor: </span> <?php echo $actor ?></p>
            <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Series: </span> <?php echo $categoria ?></p>
        </div>
        <input type="number" placeholder="1-57" max="57" min="1" name="numero" />
        <div>
            <button class="button" type="submit" name="Aceptar"><?php echo $aLang[$_COOKIE['idioma']]['acceptB']; ?></button>
        </div>
         <a style="color:black; text-decoration: underline black;" href="https://www.breakingbadapi.com/documentation" target="_blank"><p>Api de referencia</p></a>
    </form>
</div>
    <form style="text-align: center;"; name="logout" class="botones" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button class="button" type="submit" name="Volver"><?php echo $aLang[$_COOKIE['idioma']]['returnB']; ?></button>
    </form>
</main>