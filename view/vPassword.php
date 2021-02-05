<header id="header" ></header>

<main>
    <div >        
        <form class="enter" name="edit" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table class="tablaCentro">
                <tr>
                    <td for="CodUsuario" class="cabNom">
                        <?php echo $aLang[$_COOKIE['idioma']]['passw']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
            <!-----------------CONTRASEÑA VIEJA----------------->
                        <input type="password" id="Password" name="Password" value="<?php
                            echo (isset($_REQUEST['Password'])) ? $_REQUEST['Password'] : null; 
                            ?>" required>
                    </td>
                </tr>
                <tr>
                    <td for="DescUsuario" class="cabNom">
                        <?php echo $aLang[$_COOKIE['idioma']]['passw2']; ?>
                    </td>
                    <td for="DescUsuario" class="cabNom">
                        <?php echo $aLang[$_COOKIE['idioma']]['passw3']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
            <!-----------------CONTRASEÑA NUEVA----------------->            
                        <input type="password" id="PasswordNueva" name="PasswordNueva" value="<?php
                            echo (isset($_REQUEST['PasswordNueva'])) ? $_REQUEST['PasswordNueva'] : null;
                            ?>" required>
                    </td>
                    <td>
            <!-----------------REPETIR CONTRASEÑA----------------->            
                        <input type="password" id="PasswordRepetida" name="PasswordRepetida" value="<?php
                            echo (isset($_REQUEST['PasswordRepetida'])) ? $_REQUEST['PasswordRepetida'] : null;
                            ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        echo ($aErrores['PasswordNueva'] != null) ? "<span class='error'>" . $aErrores['PasswordNueva'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
                        ?>
                    </td>
                    <td>
                        <?php
                        echo ($aErrores['PasswordRepetida'] != null) ? "<span class='error'>" . $aErrores['PasswordRepetida'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
                        ?>
                    </td>
                </tr>
            </table>
            <br>
            <div>
                <button class="button" type="submit" name="CambiarPassword"><?php echo $aLang[$_COOKIE['idioma']]['changePasswB']; ?></button> 
            </div>
        </form>
        
        <form class="enter" action="<?php echo $_SERVER['PHP_SELF'] ?>" name="registro" method="post">
            <button class="button" type="submit" name="Cancelar"><?php echo $aLang[$_COOKIE['idioma']]['cancelB']; ?></button> 
       </form>
    </div>    
</main>