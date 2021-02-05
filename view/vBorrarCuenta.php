<header id="header" ></header>

<main>
    <div style="width: 10%; float: left;">
        <form name="logout"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            
            <button class="botonI" type="submit" name="inicio"><?php echo $aLang[$_COOKIE['idioma']]['start']; ?></button>
            <button class="botonI" type="submit" name='editProfile'><?php echo $aLang[$_COOKIE['idioma']]['edit']; ?></button>
            <button class="botonS" type="submit" name='deleteAccount'><?php echo $aLang[$_COOKIE['idioma']]['delete']; ?></button>
            <button class="botonI" type="submit" name='restPag'><?php echo $aLang[$_COOKIE['idioma']]['restNom']; ?></button>
            <br>
            <br>
            <button class="botonI" type="submit" name='cerrarSesion'><?php echo $aLang[$_COOKIE['idioma']]['logoff']; ?></button>
        </form>
    </div>
    
    <div style="width: 80%; float: left;">
        <form class="enter" name="edit" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table class="tablaCentro">
                <tr>
                    <td for="CodUsuario" class="cabNom">
                        <?php echo $aLang[$_COOKIE['idioma']]['user']; ?>
                    </td>
                    <td for="DescUsuario" class="cabNom">
                        <?php echo $aLang[$_COOKIE['idioma']]['description']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
            <!-----------------USUARIO----------------->
                        <input type="text" id="CodUsuario" name="CodUsuario" class="lectura" value="<?php echo $CodUser ?>" readonly>
                    </td>
                    <td>
            <!-----------------DESCRIPCIÓN----------------->            
                        <input type="text" id="DescUsuario" name="DescUsuario"  value="<?php echo $DescUser ?>" readonly/>
                    </td>
                </tr>
                <tr>
                    <td for="Perfil" class="cabNom">
                        <?php echo $aLang[$_COOKIE['idioma']]['typeUser']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
            <!-----------------TIPO DE USUARIO----------------->            
                        <input type="text" id="Perfil" name="Perfil"  class="lectura"value="<?php echo $Profile ?>" readonly/>
                    </td>
                </tr>
                <tr>
                    <td for="Conexiones" class="cabNom">
                        <?php echo $aLang[$_COOKIE['idioma']]['NumConex']; ?>
                    </td>
                    <td for="Ultima" class="cabNom">
                        <?php echo $aLang[$_COOKIE['idioma']]['DateLastConex']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
            <!-----------------NÚMERO DE CONEXIONES----------------->            
                        <input type="number" id="Conexiones" name="Conexiones" value="<?php echo $ConexNumber ?>" readonly/>
                    </td>
                    <td>
            <!-----------------ÛLTIMA FECHA DE CONEXION----------------->            
                        <input type="datetime" id="Ultima" name="Ultima" value="<?php echo $LastDateConex ?>" readonly/>
                    </td>
                </tr>
            </table>

            <br>
            <div>
                <button class="button" type="submit" name="Aceptar"><?php echo $aLang[$_COOKIE['idioma']]['deleteB']; ?></button>    
            </div>

        </form>
    </div>    
</main>