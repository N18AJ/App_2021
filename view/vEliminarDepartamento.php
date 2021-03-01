<header id="header" ></header>

<main>
    <div style="width: 10%; float: left;">
        <form name="logout"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            
            <button class="botonI" type="submit" name='mtoDepartamentos'><?php echo $aLang[$_COOKIE['idioma']]['departamentos']; ?></button>
        </form>
    </div>
    
    <div style="width: 80%; float: left;">
        <form class="enter" name="edit" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table class="tablaCentro">
                <tr>
                    <td for="CodDep" class="cabNom">
                        <?php echo $aLang[$_COOKIE['idioma']]['code']; ?>
                    </td>
                    <td for="DescDep" class="cabNom">
                        <?php echo $aLang[$_COOKIE['idioma']]['description']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
            <!-----------------CODIGO----------------->
                        <input type="text" id="CodDep" name="CodDep" class="lectura" value="<?php echo $CodDep ?>" readonly>
                    </td>
                    <td>
            <!-----------------DESCRIPCIÓN----------------->            
                        <input type="text" id="DescDep" name="DescDep"  value="<?php echo $DescDep ?>" readonly/>
                    </td>
                </tr>
                <tr>
                    <td for="FechaCreacion" class="cabNom">
                        <?php echo $aLang[$_COOKIE['idioma']]['creation']; ?>
                    </td>
                    <td for="VolDep" class="cabNom">
                        <?php echo $aLang[$_COOKIE['idioma']]['volume']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
            <!-----------------FECHA ALTA----------------->
                        <input type="text" id="FechaCreacion" name="FechaCreacion"  class="lectura" value="<?php echo $FechaCreacion ?>" readonly/>
                    </td>
                    <td>
            <!-----------------VOLUMEN----------------->
                        <input  type="number" id="VolDep" name="VolDep" value="<?php echo $VolDep ?>" readonly/>
                    </td>
                </tr>               
            </table>
            <br>
            <div>
                <button class="button" type="submit" name="Aceptar"><?php echo $aLang[$_COOKIE['idioma']]['acceptB']; ?></button> 
            </div>
        </form>
    </div>    
</main>

