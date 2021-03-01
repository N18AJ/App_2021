<header id="header" ></header>

<main>
    <div style="width: 10%; float: left;">
        <form name="logout"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            
            <button class="botonI" type="submit" name='mtoDepartamentos'><?php echo $aLang[$_COOKIE['idioma']]['departamentos']; ?></button>
        </form>
    </div>
    
    <div style="width: 80%; float: left;">
        <form onsubmit = "return campoO()" name="singup" id="login" class="enter" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table class="tablaCentro">
            <tr>
                <td>
        <!-----------------CODIGO----------------->
                    <input class="requiredI" type="text" id="codDep" name="codDep" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['code']; ?>" value="<?php
                    echo (isset($_REQUEST['codDep'])) ? $_REQUEST['codDep'] : null; ?>">
                </td>
                <td>
        <!-----------------DESCRIPCIÓN----------------->
                    <input class="requiredI" type="text" id="descDep" name="descDep" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['description']; ?>" value="<?php
                    echo (isset($_REQUEST['descDep'])) ? $_REQUEST['descDep'] : null; ?>">
                </td>
            </tr>
            <tr>
                <td class="vError"> 
                    <?php
                     echo ($aErrores['EcodDep'] != null) ? "<span style='color:#FF0000'>" . $aErrores['EcodDep'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
                    ?>
                </td>
                <td class="vError">
                    <?php
                    echo ($aErrores['EdescDep'] != null) ? "<span style='color:#FF0000'>" . $aErrores['EcodDep'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
                    ?>
                </td>
            </tr>
            <tr>
                <td>
        <!-----------------VOLUMEN----------------->            
                    <input class="requiredI" type="number" id="volDep" name="volDep" value="<?php
                    echo (isset($_REQUEST['volDep'])) ? $_REQUEST['volDep'] : null;
                    ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['volume']; ?>">
                </td>
            </tr>
            <tr>
                <td class="vError">
                    <?php
                     echo ($aErrores['EvolDep'] != null) ? "<span style='color:#FF0000'>" . $aErrores['EvolDep'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
                    ?>  
                </td>
            </tr>
        </table>
        <br>
        <div class="registro">
            <button class="button" id="btEnter" type="submit" name="Aceptar"><?php echo $aLang[$_COOKIE['idioma']]['acceptB']; ?></button>
        </div>

    </form>
    </div>    
</main>