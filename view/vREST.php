<header id="header" ></header>

<main>
    <div style="width: 20%; float: left;">
        <form name="logout"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            
            <button class="botonI" type="submit" name="inicio"><?php echo $aLang[$_COOKIE['idioma']]['start']; ?></button>
            <button class="botonI" type="submit" name='editProfile'><?php echo $aLang[$_COOKIE['idioma']]['edit']; ?></button>
            <button class="botonI" type="submit" name='deleteAccount'><?php echo $aLang[$_COOKIE['idioma']]['delete']; ?></button>
            <button class="botonS" type="submit" name='restPag'><?php echo $aLang[$_COOKIE['idioma']]['restNom']; ?></button>
            <br>
            <br>
            <button class="botonI" type="submit" name='cerrarSesion'><?php echo $aLang[$_COOKIE['idioma']]['logoff']; ?></button>
        </form>
    </div>
    
    <div style="width: 80%; float: left;">
            <div id="loginApi">
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

            <div id="loginApi">
                <form style="text-align: center;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <h2 style="font-size:22pt">Breaking Bad</h2>
                    <div>
                        <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Nombre del actor: </span> <?php echo $nombrePersonaje?></p>
                        <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Fecha cumpleaños: </span> <?php echo $cumpleaños ?></p>
                        <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Imagen: </span> <br> <img src="<?php echo $imagen ?>" width="100"></p>
                        <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Estado del personaje: </span> <?php echo $estado ?></p>
                        <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Apodo del pesonaje: </span> <?php echo $apodo ?></p>
                        <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Actor: </span> <?php echo $actor ?></p>
                        <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Series: </span> <?php echo $categoria ?></p>
                    </div>
                    <input type="number" placeholder="1-57" max="57" min="1" name="numero" />
                    <div>
                        <button class="button" type="submit" name="Aceptar"><?php echo $aLang[$_COOKIE['idioma']]['searchB']; ?></button>
                    </div>
                     <a style="color:black; text-decoration: underline black;" href="https://www.breakingbadapi.com/documentation" target="_blank"><p>Api de referencia</p></a>
                </form>
            </div>
            
            <div id="loginApi">
                <h2>Aplicación Rodrigo</h2>
                <h3>Cambio minúsculas / MAYÚSCULAS</h3>
                    <form class="otros"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div id="respuestarest"> 
                            <p><?php echo $mayus ?></p>
                        </div>
                        <input id="cadena" onkeyup="this.value = cambiarMayus(this.value)" type="text" placeholder="Escriba ..." name="cadena" value="<?php echo $valorCadena ?>"/>
                        <div>
                            <button class="button" type="submit" name="AceptarR"><?php echo $aLang[$_COOKIE['idioma']]['mayB']; ?></button>
                        </div>
                    </form> 
            </div>   

            <div id="loginApi">
                <h2>Mi Aplicación</h2>
                <h3>Cambio Decimal / Binario</h3>
                <form class="otros"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div id="respuestarest">  
                        <p><?php echo $numero ?></p>
                    </div>
                    <input id="numero"  onblur="numExp()" type="text" placeholder="Introduce números" name="number" value="<?php echo $valorNumero ?>"/>
                    <p id="errorB"></p>
                    <div>
                        <button id="btEnter"  class="button" type="submit" name="AceptarN"><?php echo $aLang[$_COOKIE['idioma']]['binB']; ?></button>
                    </div>
                    <a style="color:black; text-decoration: underline black;" href="doc/api.pdf" target="_blank"><p>Especificaciones Api</p></a>
                </form>
            </div>
       
    </div>
</main>