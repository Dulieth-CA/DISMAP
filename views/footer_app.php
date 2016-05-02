<?php 
	require 'cargando.php'; 
	require 'notificaciones.php';
?>
<script src="<?php echo URL_tmp.PUBLIC_ASSETS.'js/app/notificacion.js' ?>"></script>
<script>
	<?php echo (!empty($_GET['n'])) ? 'not.crear('.$_GET['n'].');' : ''; ?>
	$('.notificacion').click(function(){cerrarNotifiacion=false;$(this).fadeToggle();});
</script>
<script src="<?php echo URL_tmp.PUBLIC_ASSETS.'js/app/menu.js' ?>"></script>
<script src="<?php echo URL_tmp.PUBLIC_ASSETS.'js/app/index.js' ?>"></script>
