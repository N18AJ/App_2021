<form class="botones" name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <button class="button" type="submit" name="Home" id="homeB" ><?php echo $aLang[$_COOKIE['idioma']]['homeB']; ?></button> 
</form>

<main>
    <div id="loginIzq">
        <h1 style="margin-left: 25%;"><?php echo $aLang[$_COOKIE['idioma']]['startT']; ?></h1> <!-- peticion del titulo-->

        <form id="login" class="posIzq" name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <!-----------------USUARIO----------------->
            <div>
                <input class="required" type="text" id="CodUsuario" name="CodUsuario" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['user']; ?>" value="<?php
                echo (isset($_REQUEST['CodUsuario'])) ? $_REQUEST['CodUsuario'] : null;
                ?>">
            </div>
            <br>
            <!-----------------CONTRASEÑA----------------->
            <div>
                <input class="required" type="password" id="Password" name="Password" value="<?php
                echo (isset($_REQUEST['Password'])) ? $_REQUEST['Password'] : null;
                ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['password']; ?>">
            </div>
            <br>
            <div>
                <button class="button" type="submit" name="iniciarSesion"><?php echo $aLang[$_COOKIE['idioma']]['login']; ?></button>   
            </div>

        </form>

    </div>
    
    <div id="loginDec">
        <div>
            <h1><?php echo $aLang[$_COOKIE['idioma']]['signupT']; ?></h1> <!-- peticion del titulo-->

            <p style="margin-right: 25px;">
                SI TODAVÍA NO TIENES UNA CUENTA DE USUARIO DE NAJ UTILIZA ESTA OPCIÓN PARA ACCEDER AL FORMULARIO DE REGISTRO.
            </p>
            <form id="login" class="enter" name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <button class="button" type="submit" name="registrarse"><?php echo $aLang[$_COOKIE['idioma']]['signup']; ?></button> 
            </form>
        </div>
    </div>
</main>