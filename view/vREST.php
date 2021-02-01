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
                <div id="apodForm" style="display: <?php echo $apodDisplay ?>">
                    <p>Puedes seleccionar una fecha para ver su imagen</p>
                    <form name="rest" id="rest" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <p>
                            <input type="date" name="fecha" max="<?php echo date('Y-m-d') ?>" value="<?php echo date('Y-m-d') ?>">
                        </p>
                        <div class="botones">
                            <input type="submit" value="Enviar" name="enviar">
                        </div>
                    </form>
                </div>
            </div>
            <div id="servicio-rest">
                <div id="apodService" style="display: <?php echo $apodDisplay ?>">
<!--                    <p>Titulo APOD</p>
                    <img src="webroot/icons/perro.jpg">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porta nisi ut tristique tempor. Nulla facilisi. Ut tempus luctus tincidunt. Curabitur cursus diam enim, ac tempor odio congue vitae. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a ipsum enim. Sed accumsan, sem ut mattis lobortis, lorem nulla convallis velit, sit amet suscipit turpis sapien quis risus. Cras pellentesque, quam sit amet venenatis vestibulum, tellus nisl suscipit felis, quis finibus nunc odio vel elit. Praesent dictum vestibulum nunc et elementum. Pellentesque ut enim vitae risus pretium semper. Maecenas molestie aliquet nisi nec sodales.</p>-->
                    <p><?php echo $aServicioAPOD['title'] ?></p>
                    <img src="<?php echo $aServicioAPOD['url'] ?>" width="100">
                    <p><?php echo $aServicioAPOD['explanation'] ?></p>
                </div>
                
            </div>
        </div>
    </section>
    <section class="barra-inferior" id="inferior-rest">
        </section>
            
    </article>
</div>   

<div id="loginDec">
    <form style="text-align: center;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h2>Breaking Bad</h2>
        <div>
            <p style="font-size:16pt"><span style="font-weight:bold; font-size:20pt">Nombre del actor: </span> <?php echo $nombrePersonaje?></p>
            <p style="font-size:16pt"><span style="font-weight:bold;">Fecha cumpleaños: </span> <?php echo $cumpleaños ?></p>
            <p style="font-size:16pt"><span style="font-weight:bold;">Imagen: </span> <?php echo $imagen ?></p>
            <p style="font-size:16pt"><span style="font-weight:bold;">Estado del personaje: </span> <?php echo $estado ?></p>
            <p style="font-size:16pt"><span style="font-weight:bold;">Apodo del pesonaje: </span> <?php echo $apodo ?></p>
            <p style="font-size:16pt"><span style="font-weight:bold;">Actor: </span> <?php echo $actor ?></p>
            <p style="font-size:16pt"><span style="font-weight:bold;">Series: </span> <?php echo $categoria ?></p>
            
            
        </div>
        <input type="number" placeholder="1-57" max="57" min="1" name="numero" />
        <div>
            <button class="button" type="submit" name="Aceptar"><?php echo $aLang[$_COOKIE['idioma']]['acceptB']; ?></button>
        </div>
    </form>
</div>
    <form style="text-align: center"; name="logout" class="botones" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button class="button" type="submit" name="Volver"><?php echo $aLang[$_COOKIE['idioma']]['returnB']; ?></button>
    </form>
</main>