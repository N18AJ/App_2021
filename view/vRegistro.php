<header id="header" ></header>

<main>
    <h1><?php echo $aLang[$_COOKIE['idioma']]['datailsT']; ?></h1> <!-- peticion del titulo-->

    <form onsubmit = "return campoO()" name="singup" id="login" class="enter" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table class="tablaCentro">
            <tr>
                <td>
        <!-----------------USUARIO----------------->
                    <input class="required" type="text" id="CodUsuario" name="CodUsuario" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['user']; ?>" value="<?php
                    echo (isset($_REQUEST['CodUsuario'])) ? $_REQUEST['CodUsuario'] : null; ?>">
                </td>
                <td>
        <!-----------------DESCRIPCIÓN----------------->
                    <input class="required" type="text" id="DescUsuario" name="DescUsuario" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['description']; ?>" value="<?php
                    echo (isset($_REQUEST['DescUsuario'])) ? $_REQUEST['DescUsuario'] : null; ?>">
                </td>
            </tr>
            <tr>
                <td class="vError"> 
                    <?php
                    echo ($aErrores['CodUsuario'] != null) ? "<span style='color:#FF0000'>" . $aErrores['CodUsuario'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
                    ?>
                </td>
                <td class="vError">
                    <?php
                    echo ($aErrores['DescUsuario'] != null) ? "<span style='color:#FF0000'>" . $aErrores['DescUsuario'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
                    ?>
                </td>
            </tr>
            <tr>
                <td>
        <!-----------------CONTRASEÑA----------------->            
                    <input class="required" type="password" id="Password" name="Password" value="<?php
                    echo (isset($_REQUEST['Password'])) ? $_REQUEST['Password'] : null;
                    ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['password']; ?>">
                </td>
                <td>
        <!-----------------REPETIR CONTRASEÑA----------------->            
                   <input class="required" type="password" id="PasswordConfirmacion" name="PasswordConfirmacion" value="<?php
                    echo (isset($_REQUEST['PasswordConfirmacion'])) ? $_REQUEST['PasswordConfirmacion'] : null;
                    ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['confirmPassword']; ?>"> 
                </td>
            </tr>
            <tr>
                <td class="vError">
                    <?php
                    echo ($aErrores['Password'] != null) ? "<span style='color:#FF0000'>" . $aErrores['Password'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
                    ?>  
                </td>
                <td class="vError">
                   <?php
                    echo ($aErrores['PasswordConfirmacion'] != null) ? "<span style='color:#FF0000'>" . $aErrores['PasswordConfirmacion'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
                    ?> 
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="checkbox" id="check"><span style="margin-left: -125px;"><?php echo $aLang[$_COOKIE['idioma']]['priv1'];?><br> <?php echo $aLang[$_COOKIE['idioma']]['priv2']; ?>
                        <a style="color:black; text-decoration: underline black;" onclick="myBoton1()"><?php echo $aLang[$_COOKIE['idioma']]['priv']; ?></a></span></td>
            </tr> 
            <tr>
                <td colspan="2" style="color: red; text-align: center" id="checkError"></td>
            </tr>  
        </table>
        <br>
        <div class="registro">
            <button class="button" type="submit" id="btEnter" name="Registrarse"><?php echo $aLang[$_COOKIE['idioma']]['signup']; ?></button>
        </div>

    </form>
    <form name="singup" id="login" class="enter" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="registro">
            <button class="button" name="Cancelar"><?php echo $aLang[$_COOKIE['idioma']]['cancelB']; ?></button>
        </div>

    </form>
</main>