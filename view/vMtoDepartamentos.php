<header id="header" ></header>

<main>
    <div style="width: 25%; float: left;">
        <form name="logout"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            
            <button class="botonI" type="submit" name="inicio"><?php echo $aLang[$_COOKIE['idioma']]['start']; ?></button>
            <button class="botonS" type="submit" name='mtoDepartamentos'><?php echo $aLang[$_COOKIE['idioma']]['departamentos']; ?></button>
            <button class="botonI" type="submit" name='editProfile'><?php echo $aLang[$_COOKIE['idioma']]['edit']; ?></button>
            <button class="botonI" type="submit" name='deleteAccount'><?php echo $aLang[$_COOKIE['idioma']]['delete']; ?></button>
            <button class="botonI" type="submit" name='restPag'><?php echo $aLang[$_COOKIE['idioma']]['restNom']; ?></button>
            <br>
            <br>
            <button class="botonI" type="submit" name='cerrarSesion'><?php echo $aLang[$_COOKIE['idioma']]['logoff']; ?></button>
        </form>
    </div>
    <div style="width: 75%; float: left;">
        <form class="otros" id="busqueda" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="required">
                <label for="codigo">Descripción: </label>
                <input type="search" name="descripcion" placeholder="Departamento de..." value="<?php
                if (isset($_REQUEST['descripcion'])) {
                    echo $_REQUEST['descripcion'];
                }
                ?>"/>
                <button id="buscar" class="button" type="submit" name="buscar"><?php echo $aLang[$_COOKIE['idioma']]['searchB']; ?></button>
                <br><br>
                <button id="insertar" class="button" type="submit" name="insertar"><?php echo $aLang[$_COOKIE['idioma']]['addB']; ?></button><br>
            </div> 
        
        <br><br>
            <table style="margin-left: 150px; text-align: center;">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Volumen de negocio</th>
                        <th>Fecha de creación</th>
                        <th>Fecha de baja</th>
                        <th colspan="2">Opciones</th>
                    </tr>
                </thead>
                <?php 
                if (count($arrayDepartamentos) > 0) { 
                    ?>
                    <tbody>
                        <?php
                        foreach ($arrayDepartamentos as $departamento => $oDepartamento) {
                            $codigoDep = $oDepartamento->getCodDepartamento();
                            
                            if (is_null($oDepartamento->getFechaBaja())) {
                                $fechaBaja = "";
                            } else {
                                $fechaBaja = date('d/m/Y', $oDepartamento->getFechaBaja());
                            }
                            //var_dump($oDepartamento);
                            ?>
                            <tr>
                                <td><?php echo $oDepartamento->getCodDepartamento(); ?></td>
                                <td><?php echo $oDepartamento->getDescDepartamento(); ?></td>
                                <td><?php echo $oDepartamento->getVolumenNegocio(); ?></td>
                                <td><?php echo date('d/m/Y', $oDepartamento->getFechaCreacion()); ?></td>
                                <td><?php echo $fechaBaja; ?></td>
                                <td>
                                    <button class="options" name="modificarDepartamento" value="<?php echo $codigoDep ?>"><img src="webroot/media/images/editar2.png" alt="imagen editar consultar departamento" width="20"></button>
                                    <button class="options" name="eliminarDepartamento" value="<?php echo $codigoDep ?>"><img src="webroot/media/images/eliminar2.png" alt="imagen eliminar departamento" width="20"></button>                           
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                    <?php
                } else {
                    ?>
                    <h4>¡No se ha encontrado ningún departamento por esa descripción!</h4>
                <?php } ?>

            </table>
        </form>
    </div>
       
</main>