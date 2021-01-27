<header class="titulo">
    <h1><?php echo $aLang[$_COOKIE['idioma']]['deleteT']; ?></h1> <!-- peticion del titulo-->
</header>
<main>
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
            <button class="button" type="submit" name="Cancelar"><?php echo $aLang[$_COOKIE['idioma']]['cancelB']; ?></button> 
        </div>

    </form>
</main>