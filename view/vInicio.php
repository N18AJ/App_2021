<header id="header" ></header>
<!--<header class="titulo" id="persona">
    <h1><?php echo $aLang[$_COOKIE['idioma']]['person']; ?></h1>
</header>-->
<main>
    <div id="loginIzq">
        <form name="logout"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            
            <button class="botonS" type="submit" name="inicio"><?php echo $aLang[$_COOKIE['idioma']]['start']; ?></button>
            <button class="botonI" type="submit" name='editProfile'><?php echo $aLang[$_COOKIE['idioma']]['edit']; ?></button>
            <button class="botonI" type="submit" name='deleteAccount'><?php echo $aLang[$_COOKIE['idioma']]['delete']; ?></button>
            <button class="botonI" type="submit" name='restPag'><?php echo $aLang[$_COOKIE['idioma']]['restNom']; ?></button>
            
            <button class="botonI" type="submit" name='cerrarSesion'><?php echo $aLang[$_COOKIE['idioma']]['logoff']; ?></button>
        </form>
    </div>
    
    <div id="loginDec">
        <article>
            <h2 class="bienvenida"><?php echo $aLang[$_COOKIE['idioma']]['welcome'] ?> </h2>
            <p><?php echo ($ConexNumber > 1) ? $aLang[$_COOKIE['idioma']]['numConnections'] : $aLang[$_COOKIE['idioma']]['numConnectionsWelcome']; ?></p>
            <?php echo ($LastDateConex != null) ? "<p>" . $aLang[$_COOKIE['idioma']]['lastConnection'] . "</p>" : null; ?>
        </article>
    </div>
</main>