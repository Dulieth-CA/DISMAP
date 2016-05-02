<?php 
	require MODELS.'aside_model.php';
	$data = new aside_model();
	$q = $data -> getData();
	$q = $q[0];

  $empresa = $data -> alertas('empresa');
?>
<header class="_header">
	<span class="i_menu"><i class="fa fa-bars"></i></span><span class="menu_header fontMain dL">ENFERMEDADES</span>
	<a href="<?php echo URL_tmp; ?>panel/salir"><span class="menu_header fontMain dR a_white">SALIR</span></a>
</header>

<aside class="_aside style-1">
	<div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo URL_tmp.PUBLIC_ASSETS.'img/df_user.png'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo (strlen($q['sNombres']) < 15) ? $q['sNombres'] : substr($q['sNombres'], 0, 15).'...'; ?></p>
          <a href="#" class="txt-white txt-bold"><i class="fa fa-key txt-green"></i> <?php echo $q['sCodigoUsuario'] ?></a>
        </div>
    </div>
    <ul class="sidebar-menu">
    	<li class="header">MENÚ PRINCIPAL <i class="fa fa-hourglass-o pull-right cargando" style="display:none;"></i></li>
      <!-- 
      <li class="active treeview">
        
        <a href="<?php echo URL_tmp.'panel/inicio' ?>" class="cargar main-<?php if($active == 'inicio'){echo 'active';}else{echo 'unactive';} ?>">
          <i class="fa fa-home"></i> <span>INICIO</span></i>
        </a>
      </li> -->

    	<li class="active treeview">
        <a href="<?php echo URL_tmp.'panel/' ?>" class="cargar main-<?php if($active=='nueva_enfermedad'){echo 'active';}else{echo 'unactive';} ?>">
          <i class="fa fa-plus"></i> <span>NUEVA ENFERMEDAD</span></i>
        </a>
      </li>

      <li class="active treeview">
        <a href="#" class="main-<?php if($section == 'enf'){echo 'active';}else{echo 'unactive';} ?>">
          <i class="fa fa-file-o"></i> <span>ENFERMEDADES</span> <i class="fa fa-angle-<?php if($section == 'enf'){echo 'down';}else{echo 'left';} ?> pull-right"></i>
        </a>
        <ul class="treeview-menu sub-menu" style="display: <?php if($section == 'enf'){echo '';}else{echo 'none';} ?>;">
          <li>
            <a href="<?php echo URL_tmp.'panel/' ?>" class="cargar"><i class="fa fa-circle-o"></i> Nueva Enfermedad</a>
          </li>
          <li>
            <a href="<?php echo URL_tmp.'panel/enfermedad/emitidas' ?>" class="cargar" <?php if($active=='enfermedades_emitidas'){echo 'style="color:#fff;"';} ?>><i class="fa fa-circle-o"></i> Enfermedad Emitidas</a>
          </li>
         <!--  <li>
            <a href="<?php echo URL_tmp.'panel/factura/canceladas' ?>" class="cargar" <?php if($active=='facturas_canceladas'){echo 'style="color:#fff;"';} ?>><i class="fa fa-circle-o"></i> Enfermedad Canceladas</a>
          </li> -->
          <!-- <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li> -->
        </ul>
      </li>
<!-- 
      <li class="active treeview">
        <a href="#" class="main-unactive">
          <i class="fa fa-male"></i> <span>Clientes</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu sub-menu" style="display: none;">
          <li><a href="index.html"><i class="fa fa-circle-o"></i> Nuevo Cliente</a></li>
          <li><a href="index2.html"><i class="fa fa-circle-o"></i> Ver Clientes</a></li>
        </ul>
      </li>

      <li class="active treeview">
        <a href="#" class="main-unactive">
          <i class="fa fa-calculator"></i> <span>Presupuestos</span> <i class="fa fa-lock pull-right"></i>
        </a>
      </li>

      <li class="active treeview">
        <a href="#" class="main-unactive">
          <i class="fa fa-pencil-square-o"></i> <span>Notas de remisión</span> <i class="fa fa-lock pull-right"></i>
        </a>
      </li> -->

<?php 
/*
**
**CONFIGURACION
**
*/
 ?>
      <li class="active treeview">
        <a href="#" class="main-<?php if($section == 'configuracion'){echo 'active';}else{echo 'unactive';} ?>">
          <i class="fa fa-cog"></i> 
          <span>Configuración</span> 
          <!-- <i class="fa fa-exclamation-triangle faltan_datos" style="color:#FFE200;margin-left:40px;">
            <div><span>¡Faltan tus datos!</span></div>
          </i>  -->
          <i class="fa fa-angle-<?php if($section == 'configuracion'){echo 'down';}else{echo 'left';} ?> pull-right"></i>
        </a>
        <ul class="treeview-menu sub-menu" style="display: <?php if($section == 'configuracion'){echo '';}else{echo 'none';} ?>;">
          <!-- <li>
            <a href="<?php echo URL_tmp.'panel/configuracion/afiliado' ?>" class="cargar" <?php if($active=='conf_afiliado'){echo 'style="color:#fff;"';} ?>><i class="fa fa-circle-o"></i> Programa de afiliado 
              <i class="fa fa-money pull-right faltan_datos" style="color:#00A65A;">
                <div><span>¡GANA DINERO!</span></div>
              </i>
            </a>
          </li> -->
          <li>
            <a href="<?php echo URL_tmp.'panel/configuracion/usuario' ?>" class="cargar" <?php if($active=='conf_usuario'){echo 'style="color:#fff;"';} ?>><i class="fa fa-circle-o"></i> Datos de usuario</a>

          </li>
          <!-- <li>
            <a href="<?php echo URL_tmp.'panel/configuracion/empresa' ?>" class="cargar" <?php if($active=='conf_empresa'){echo 'style="color:#fff;"';} ?>><i class="fa fa-circle-o"></i> Datos de tu empresa
            <?php if(!$empresa){ ?>
              <i class="fa fa-exclamation-triangle faltan_datos pull-right" style="color:#FFE200;">
                <div><span>¡Faltan tus datos!</span></div>
              </i> 
              <?php } ?>
            </a>
          </li>
          <li>
            <a href="<?php echo URL_tmp.'panel/configuracion/cfdi' ?>" class="cargar" <?php if($active=='conf_CFDI'){echo 'style="color:#fff;"';} ?>><i class="fa fa-circle-o"></i> Configuración CFDI
              <i class="fa fa-exclamation-triangle faltan_datos pull-right" style="color:#FFE200;">
                <div><span>¡Faltan tus datos!</span></div>
              </i> 
            </a>
          </li> -->
        </ul>
      </li>

      <li class="active treeview">
        <a href="<?php echo URL_tmp.'panel/mapa' ?>" class="main-<?php if($section == 'mapa'){echo 'active';}else{echo 'unactive';} ?>">
          <i class="fa fa-map"></i> 
          <span>MAPA</span> 
          <i class="fa fa-angle-<?php if($section == 'configuracion'){echo 'down';}else{echo 'left';} ?> pull-right"></i>
        </a>
      </li>

<?php 
/*
**
**CUENTA
**
*/
 ?>
    <!--   <li class="active treeview">
        <a href="#" class="main-<?php if($section == 'cuenta'){echo 'active';}else{echo 'unactive';} ?>">
          <i class="fa fa-institution"></i> 
          <span>CUENTA</span> 
          <i class="fa fa-angle-<?php if($section == 'cuenta'){echo 'down';}else{echo 'left';} ?> pull-right"></i>
        </a>
        <ul class="treeview-menu sub-menu" style="display: <?php if($section == 'cuenta'){echo '';}else{echo 'none';} ?>;">
          <li>
            <a href="<?php echo URL_tmp.'panel/cuenta/suscripcion' ?>" class="cargar" <?php if($active=='suscripcion'){echo 'style="color:#fff;"';} ?>><i class="fa fa-circle-o"></i> Suscripción</a>
          </li>
          <li>
            <a href="<?php echo URL_tmp.'panel/configuracion/usuario' ?>" class="cargar" <?php if($active=='as'){echo 'style="color:#fff;"';} ?>><i class="fa fa-circle-o"></i> Exportar datos</a>
          </li>
          <li>
            <a href="<?php echo URL_tmp.'panel/configuracion/usuario' ?>" class="cargar" <?php if($active=='as'){echo 'style="color:#fff;"';} ?>><i class="fa fa-circle-o"></i> Usuarios</a>
          </li>
          <li>
            <a href="<?php echo URL_tmp.'panel/configuracion/usuario' ?>" class="cargar" <?php if($active=='as'){echo 'style="color:#fff;"';} ?>><i class="fa fa-circle-o"></i> Privilegios de usuarios</a>
          </li>
        </ul>
      </li>

 -->


    </ul>
</aside>