<header class="titulo">
    <h1><?php echo $aLang[$_COOKIE['idioma']]['restT']; ?></h1> <!-- peticion del titulo-->
</header>
<main>
<div id="loginIzq" >
    <article style="text-align: center;">
        <section>
            <h2>Aplicación resumen Susana 20-21</h2>
        </section>
        <section>
            <div id="cuerpo-rest">
                <p id="titulo-rest">Uso de API REST</p>
                <div id="formulario-rest">
                    <p>APOD: Atronomy Picture of the Day</p>
                    <p>Puedes seleccionar una fecha para ver su imagen</p>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <p>
                            <input type="date" name="fecha" value="<?php echo date('Y-m-d') ?>">
                        </p>
                        <div class="botones">
                            <input type="submit" value="Enviar" name="enviar">
                        </div>
                    </form>
                </div>
                <div id="servicio-rest">
                    <p><?php echo $tituloEnCurso?></p>
                    <img src="<?php echo $imagenEnCurso?>" width="100">
                    <p><?php echo $descripcionEnCurso?></p>
                </div>
            </div>
        </section>
            
    </article>
</div>   

<div id="loginDec">
    <form style="text-align: center;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h2>Breaking Bad</h2>
        <div>
            <p>Nombre del actor: <?php echo $nombrePersonaje?></p>
            <p>Fecha cumpleaños: <?php echo $cumpleaños ?></p>
            <p>Ocupaciones del personaje: <?php echo $ocupacion ?></p>
            <p>Imagen: <?php echo $imagen ?></p>
            <p>Estado del personaje: <?php echo $estado ?></p>
            <p>Apodo del pesonaje: <?php echo $apodo ?></p>
            <p>Temporadas de rodaje: <?php echo $aparicion ?></p>
            <p>Actor: <?php echo $actor ?></p>
            <p>Series: <?php echo $categoria ?></p>
            
            
        </div>
        <input type="number" placeholder="1-15" max="15" min="1" name="numero" />
        <div>
            <button class="button" type="submit" name="Aceptar"><?php echo $aLang[$_COOKIE['idioma']]['acceptB']; ?></button>
        </div>
    </form>
</div>
    <form style="text-align: center"; name="logout" class="botones" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button class="button" type="submit" name="Volver"><?php echo $aLang[$_COOKIE['idioma']]['returnB']; ?></button>
    </form>
</main>