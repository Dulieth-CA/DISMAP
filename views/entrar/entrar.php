<!DOCTYPE html>
<html lang="en">
<head>
	<title>Entrar - Factura Facilito</title>
	<?php require VIEWS.'header_app.php';?>
</head>
<body>

<div class="container">
	<div class="row jump">
		<div class="col-md-6 col-xs-12">
			<!-- <a href="<?php echo URL_tmp ?>"><img src="<?php echo URL_tmp.PUBLIC_ASSETS; ?>img/logoN.png" style="max-width: 350px; width: 100%;" alt="Factura Facilito" title="Factura Facilito"></a> -->
		</div>
	</div>
	
	<div class="row jump center-block" id="s1" style="max-width: 280px; display: block;">
		<div id="sc2" style="display:none;">
			<div class="row jump txt-center">
				<img src="<?php echo URL_tmp.PUBLIC_ASSETS ?>img/cargando.gif" alt="Cargando" title="cargando" style="width:80px;">
				<h4>Cargando</h4>
			</div>
		</div>
		
		<div id="sc1">
		<h3 class="txt-center fontMain txt-blue"><b>Introduce tu email y contraseña<br></b></h3>

		<h5 id="error1" class="txt-center fontMain txt-blue f12" style="color:red!important;display:none;">
			<b>El correo electrónico y la contraseña no coinciden</b>
		</h5>
		
		
		<form action="<?php echo URL_tmp ?>panel/entrar" method="POST" id="form_entrar">
			<div class="input-group jump">
	          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
	          <input type="email" name="email" class="form-control f16" placeholder="Tu correo electrónico" maxlength="200" required="">
	        </div>

			<div class="input-group jump">
	          <span class="input-group-addon"><i class="fa fa-lock f20"></i></span>
	          <input type="password" name="password" class="form-control f16" placeholder="Contraseña" maxlength="200" required="">
	        </div>

	        <div class="col-md-12 jump txt-right">
	        	<input type="submit" class="form-control btn-info" value="ENTRAR">
	        </div>
        </form>

        <div class="col-md-12 jump txt-right">
        	<a href="#" id="olvidado" class="link f14 txt-sub">He olvidado mi contraseña</a>
        </div>
		<div class="col-md-12 jump-x2 registro">
        	<h4 class="txt-center fontMain txt-green"><b>¿Todavía no tienes cuenta?</b></h4>
        	<a href="<?php echo URL_tmp ?>registro"  class="form-control btn-warning txt-center btn-cargando">¡Pruébalo Gratis!</a>
        </div>

        <div class="col-md-12 jump-x2 registro2">
        	<a href="<?php echo URL_tmp ?>registro"  class="form-control btn-warning txt-center btn-cargando">¡Registrate Gratis!</a>
        </div>
        </div>

        <div class="col-md-12 jump-x4 txt-center">
        	<!-- <p>© 2016 FacturaFacilito</p> -->
        </div>
	</div>

	<div class="row jump center-block" id="s2" style="max-width: 280px; display: none;">
		<h3 class="txt-center fontMain txt-blue"><b>No puedes acceder? Olvidaste la contraseña?</b></h3>
		
		<h5 id="error2" class="txt-center fontMain txt-blue f12" style="color:red!important;display:none;">
			<b>No se encontro el correo electrónico.<br>Intenta de nuevo.</b>
		</h5>
		
		<form action="<?php echo URL_tmp ?>entrar/olvidado" method="POST">
			<div class="input-group jump">
	          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
	          <input type="email" name="email" class="form-control f16" placeholder="Tu correo electrónico" maxlength="200" required="">
	        </div>

	        <div class="col-md-12 jump txt-right">
	        	<input type="submit" class="form-control btn-info" value="Envíame las instrucciones">
	        </div>
        </form>

        <div class="col-md-12 jump txt-right">
        	<a href="#" id="volver" class="link f14 txt-sub">volver</a>
        </div>

        <div class="col-md-12 jump-x2 ">
        	<a href="<?php echo URL_tmp ?>registro"  class="form-control btn-warning txt-center btn-cargando">¡Registrate Gratis!</a>
        </div>

        <div class="col-md-12 jump-x4 txt-center">
        	<!-- <p>© 2016 FacturaFacilito</p> -->
        </div>
	</div>
</div>





<?php require VIEWS.'footer_app.php'; ?>
<script src="http://localhost/sistema-facturas/public/js/app/index.js"></script>
<script src="http://localhost/sistema-facturas/public/js/app/menu.js"></script><script>
	$('#olvidado').click(function(event) {
		$('#s1').hide();
		$('#s2').fadeToggle();
	});

	$('#volver').click(function(event) {
		$('#s2').hide();
		$('#s1').fadeToggle();
	});

	$('#form_entrar').submit(function(event) {
		cargando();
	});

	$('.btn-cargando').click(function(event) {
		cargando();
	});

function cargando(){
	$('#sc1').hide();
	$('#sc2').fadeToggle();
}
</script>

</body>
</html>